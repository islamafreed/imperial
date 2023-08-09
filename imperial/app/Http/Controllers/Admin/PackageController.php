<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session,DB,Crypt,Validator,Auth,Str,Image;

use App\Models\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::where('status',1)->orderBy('id','desc')->get();
        return view('admin.package.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
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

         $tags = "";
         $tags = explode(',', $request->tags);

         $rules = Package::$rules;
         $messages = Package::$messages;

         $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
         }

            $package = new Package();
          
            $package->name = $request->name;
            $package->slug = Str::slug($request->name, '-');
            $package->remarks = $request->remarks;
            $package->package_price = $request->package_price;
            
            $package_img_slug = Str::slug($request->package_img, '-');

            // dd($package_img_slug);
           
            if( $request->hasFile('package_img'))
            {
                // dd('has file');

                $file=$request->file('package_img');

                // $imageName=str_random(6).$file->getClientOriginalName();
                $imageName = strtolower(uniqid()).'_'.$package_img_slug.'.'.$file->getClientOriginalExtension();
                $destinationPathSmall=str_replace('\\', '/', public_path().'/uploads/package/small');
                $image=Image::make($file->getRealPath());

                $image->resize(750,500)->save($destinationPathSmall.'/'.$imageName);
                
                $destinationPath=str_replace('\\', '/', public_path().'/uploads/package');
                $file->move($destinationPath,$imageName);
                $package->package_img = $imageName;
            }

            $package->save();
          
            $package->tag($tags);
            $package->save();

         
      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully saved package details');
        return redirect()->route('admin.package');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package_id = Crypt::decrypt($id);
        $package = Package::where([['status',1],['id',$package_id]])->first();
        $tags = [];
          foreach ($package->tags as $tag) {
            // array_push($tags, $tag->name);
            $tags[$tag->id] = $tag->name;
        }
        return view('admin.package.show',compact('package','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package_id = Crypt::decrypt($id);
        $package = Package::where([['status',1],['id',$package_id]])->first();
        $tags = [];
          foreach ($package->tags as $tag) {
            // array_push($tags, $tag->name);
            $tags[$tag->id] = $tag->name;
        }
        return view('admin.package.edit',compact('package','tags'));
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
        $package_id = Crypt::decrypt($id);
        $package = Package::where([['status',1],['id',$package_id]])->first();
        $tags = "";
        $tags = explode(',', $request->tags);

        $package->untag();
        $package->save();

        $rules = Package::$rules;
        $messages = Package::$messages;

        if ($package->package_img != null) {
            $rules['package_img'] = str_replace("required", "nullable", $rules['package_img']);
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $package->name = $request->name;
        $package->slug = Str::slug($request->name, '-');
        $package->remarks = $request->remarks;
        $package->package_price = $request->package_price;
        
        $package_img_slug = Str::slug($request->package_img, '-');

        // dd($package_img_slug);
       
        if( $request->hasFile('package_img'))
        {
            // dd('has file');

            $file=$request->file('package_img');

            // $imageName=str_random(6).$file->getClientOriginalName();
            $imageName = strtolower(uniqid()).'_'.$package_img_slug.'.'.$file->getClientOriginalExtension();
            $destinationPathSmall=str_replace('\\', '/', public_path().'/uploads/package/small');
            $image=Image::make($file->getRealPath());

            $image->resize(750,500)->save($destinationPathSmall.'/'.$imageName);
            
            $destinationPath=str_replace('\\', '/', public_path().'/uploads/package');
            $file->move($destinationPath,$imageName);
            $package->package_img = $imageName;
        }

        $package->save();
      
        $package->tag($tags);
        $package->save();

    }catch(ValidationException $e)
        {
            return Redirect::back();
        }

        Session::flash('success','Successfully updated package details');
        return redirect()->route('admin.package');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package_id = Crypt::decrypt($id);
        $package = Package::where([['status',1],['id',$package_id]])->update(['status'=>0]);
        Session::flash('success','Successfully deleted package details');
        return redirect()->route('admin.package');
    }
}
