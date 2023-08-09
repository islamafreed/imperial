<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session,DB,Crypt,Validator,Str,Image,Redirect;

use App\Models\Facility, App\Models\FacilityImg;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::with('facility_img')->where('status',1)->get();
        return view('admin.facility.index',compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
       {
        $rules = Facility::$rules;
        $messages = Facility::$messages;

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $facility = new Facility();
        
        $facility->caption = $request->caption;
        $facility->title = $request->title;
        $facility->slug = Str::slug($request->title, '-');
        $facility->details = $request->details;
        $facility_img_slug = Str::slug($request->facility_cover_img, '-');
     
        if( $request->hasFile('facility_cover_img'))
        {
           
            $file=$request->file('facility_cover_img');
            $imageName = strtolower(uniqid()).'_'.$facility_img_slug.'.'.$file->getClientOriginalExtension();
            $destinationPathSmall=str_replace('\\', '/', public_path().'/uploads/facility/cover/small');
            $image=Image::make($file->getRealPath());

            $image->resize(750,500)->save($destinationPathSmall.'/'.$imageName);
            
            $destinationPath=str_replace('\\', '/', public_path().'/uploads/facility/cover');
            $file->move($destinationPath,$imageName);
            $facility->facility_cover_img = $imageName;
        }
        $facility->save();
   
        if( $request->hasFile('files') )
        {
            $images = $request->input('facility_img');

            if(!$images) {
                return redirect()->back();
            }

            foreach ($images as $image) {
       
                $f_img = new FacilityImg;
                $f_img->facility_id = $facility->id;
                $f_img->facility_img =  $image;
                $f_img->save();
            }
            
        }

      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully added facility deatils');
        return redirect()->route('admin.facility-img');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $f_img_id = Crypt::decrypt($id);
        $facility = Facility::with('facility_img')->where([['status',1],['id',$f_img_id]])->first();
        return view('admin.facility.show',compact('facility'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f_img_id = Crypt::decrypt($id);
        $facility = Facility::with('facility_img')->where([['status',1],['id',$f_img_id]])->first();
        return view('admin.facility.edit',compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try
       {
        
        $f_img_id = Crypt::decrypt($id);
        $facility = Facility::with('facility_img')->where([['status',1],['id',$f_img_id]])->first();  

        $rules = Facility::$rules;
        $messages = Facility::$messages;

        if ($facility->facility_img) {
            $rules['facility_cover_img'] = str_replace("required", "nullable", $rules['facility_cover_img']);
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        $facility->caption = $request->caption;
        $facility->title = $request->title;
        $facility->slug = Str::slug($request->title, '-');
        $facility->details = $request->details;
        $facility_img_slug = Str::slug($request->facility_cover_img, '-');
     
        if( $request->hasFile('facility_cover_img'))
        {
           
            $file=$request->file('facility_cover_img');
            $imageName = strtolower(uniqid()).'_'.$facility_img_slug.'.'.$file->getClientOriginalExtension();
            $destinationPathSmall=str_replace('\\', '/', public_path().'/uploads/facility/cover/small');
            $image=Image::make($file->getRealPath());

            $image->resize(750,500)->save($destinationPathSmall.'/'.$imageName);
            
            $destinationPath=str_replace('\\', '/', public_path().'/uploads/facility/cover');
            $file->move($destinationPath,$imageName);
            $facility->facility_cover_img = $imageName;
        }
        $facility->save();

        if( $request->hasFile('files') )
        {
            $images = $request->input('facility_img');

            if(!$images) {
                return redirect()->back();
            }

            foreach ($images as $image) {
       
                $f_img = new FacilityImg;
                $f_img->facility_id = $facility->id;
                $f_img->facility_img =  $image;
                $f_img->save();
            }
            
        }

    }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully added facility deatils');
        return redirect()->route('admin.facility-img');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajaxFacilityImageUpload(Request $request)
    {
        if($request->ajax() && $request->hasFile('files')) {

            $files = $request->file('files');

            $ret = array();

            foreach($files as $file) {
               
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension(); // getting file extension
                
                $imageName = str_random(6).'.'.$extension;

                $destinationPathSmall = public_path('/uploads/facility/small');

                $image = Image::make($file->getRealPath());
                $image->resize(300,200)->save($destinationPathSmall.'/'.$imageName);

                $destinationPath = public_path('/uploads/facility/');
                $upload_success = $file->move($destinationPath, $imageName);

                $ret[] = $imageName;
            }

            //$comma_separated = implode(",", $ret);

            if ($upload_success) {
                echo json_encode($ret);
                //return response()->json('success', 200);
            } else {
                echo false;
                //return response()->json('error', 400);
            }

        }
    }

    /*
        Unlink images selected for uploading via ajax
    */
    public function ajaxFacilityImageDelete(Request $request)
    {
        if($request->ajax()) {

            $file = $request->input('file');

            
            $destinationPathSmall = public_path('uploads/facility/small/');
            $destinationPath = public_path('uploads/facility/');

            unlink($destinationPathSmall.$file[0]);
            unlink($destinationPath.$file[0]);
 
        }
    }

    public function deleteImage($id, $facility_img_id)
    {
        $f_id = Crypt::encrypt($id);

        $facility_img_id = Crypt::decrypt($facility_img_id);

        $f_img = FacilityImg::where([['status',1],['id',$facility_img_id]])->update(['status' => 0]);

        Session::flash('success','Successfully deleted facility image');
        return Redirect::route('admin.edit-facility-img',['id' => $f_id]);
    }
}
