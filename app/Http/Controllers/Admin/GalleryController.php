<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session,DB,Crypt,Validator,Str,Image,Redirect;

use App\Models\GalleryCategory, App\Models\GalleryImage, App\Models\GImg;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_imgs = GalleryImage::with('gallery_cat','g_img')->where('status',1)->orderBy('id','desc')->get();
        return view('admin.gallery.index',compact('gallery_imgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery_cats = GalleryCategory::where('status',1)->get();
        return view('admin.gallery.create',compact('gallery_cats'));
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
        $rules = GalleryImage::$rules;
        $messages = GalleryImage::$messages;

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gallery_img = new GalleryImage();
        
        $gallery_img->caption = $request->caption;
        $gallery_img->slug = Str::slug($request->caption, '-');
        $gallery_img->gallery_cat_id = $request->gallery_cat_id;
        $gallery_img->remarks = $request->remarks;
        $gallery_img->save();
   
        if( $request->hasFile('files') )
        {
            $images = $request->input('gallery_img');

            if(!$images) {
                return redirect()->back();
            }

            foreach ($images as $image) {
       
                $g_img = new GImg;
                $g_img->gallery_image_id = $gallery_img->id;
                $g_img->g_img =  $image;
                $g_img->save();
            }
            
        }

      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully added Gallery image deatils');
        return redirect()->route('admin.gallery-img');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $g_img_id = Crypt::decrypt($id);
        $gallery_img = GalleryImage::with('gallery_cat','g_img')->where([['status',1],['id',$g_img_id]])->first();
        return view('admin.gallery.show',compact('gallery_img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $g_img_id = Crypt::decrypt($id);
        $gallery_img = GalleryImage::with('gallery_cat','g_img')->where([['status',1],['id',$g_img_id]])->first();
        $gallery_cats = GalleryCategory::where('status',1)->get();
        return view('admin.gallery.edit',compact('gallery_img','gallery_cats'));
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

        $g_img_id = Crypt::decrypt($id);
        $gallery_img = GalleryImage::with('gallery_cat','g_img')->where([['status',1],['id',$g_img_id]])->first();

        $rules = GalleryImage::$rules;
        $messages = GalleryImage::$messages;

        // if ($gallery_img->g_img) {
        //     $rules['g_img'] = str_replace("required", "nullable", $rules['g_img']);
        // }

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gallery_img->caption = $request->caption;
        $gallery_img->slug = Str::slug($request->caption, '-');
        $gallery_img->gallery_cat_id = $request->gallery_cat_id;
        $gallery_img->remarks = $request->remarks;
        $gallery_img->save();

      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully updated Gallery image deatils');
        return redirect()->route('admin.gallery-img');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $g_img_id = Crypt::decrypt($id);
        $g_img = GalleryImage::where([['status',1],['id',$g_img_id]])->update(['status' => 0]);
        Session::flash('success','Successfully deleted Gallery image deatils');
        return redirect()->route('admin.gallery-img');
    }

    public function ajaxGalleryImageUpload(Request $request)
    {
        if($request->ajax() && $request->hasFile('files')) {

            $files = $request->file('files');

            $ret = array();

            foreach($files as $file) {
               
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension(); // getting file extension
                
                $imageName = str_random(6).'.'.$extension;

                $destinationPathSmall = public_path('/uploads/gallery_img/small');

                $image = Image::make($file->getRealPath());
                $image->resize(300,200)->save($destinationPathSmall.'/'.$imageName);

                $destinationPath = public_path('/uploads/gallery_img/');
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
    public function ajaxGalleryImageDelete(Request $request)
    {
        if($request->ajax()) {

            $file = $request->input('file');

            // print_r($file);
            // die();

            $destinationPathSmall = public_path('uploads/gallery_img/small/');
            $destinationPath = public_path('uploads/gallery_img/');

            unlink($destinationPathSmall.$file[0]);
            unlink($destinationPath.$file[0]);
 
        }
    }

    public function deleteImage($id, $gallery_img_id)
    {
        $g_img_id = Crypt::decrypt($id);
        $gallery_img_id = Crypt::encrypt($gallery_img_id);
        $g_img = GImg::where([['status',1],['id',$g_img_id]])->update(['status' => 0]);
        Session::flash('success','Successfully deleted Gallery image');
        return Redirect::route('admin.edit-gallery-img',['id' => $gallery_img_id]);
    }
    
}
