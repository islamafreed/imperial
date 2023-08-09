<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session,DB,Crypt,Validator,Str,Image;

use App\Models\GalleryCategory;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g_cats = GalleryCategory::where('status',1)->orderBy('id','desc')->get();
        return view('admin.gallery.category.index',compact('g_cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.category.create');
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
         $rules = GalleryCategory::$rules;
         $messages = GalleryCategory::$messages;

         $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
         }

            $data = $request->all();
            $data['slug'] = Str::slug($request->name, '-');

            GalleryCategory::create($data);
          
      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully saved gallery category');
        return redirect()->route('admin.gallery-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $g_img_cat_id = Crypt::decrypt($id);
        $g_img_cat = GalleryCategory::where([['status',1],['id',$g_img_cat_id]])->first();
        return view('admin.gallery.category.show',compact('g_img_cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $g_img_cat_id = Crypt::decrypt($id);
        $g_img_cat = GalleryCategory::where([['status',1],['id',$g_img_cat_id]])->first();
        return view('admin.gallery.category.edit',compact('g_img_cat'));
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
        $g_img_cat_id = Crypt::decrypt($id);
        $g_img_cat = GalleryCategory::where([['status',1],['id',$g_img_cat_id]])->first();

        $rules = GalleryCategory::$rules;
        $messages = GalleryCategory::$messages;

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $g_img_cat->name = $request->name;
        $g_img_cat->slug = Str::slug($request->name, '-');
        $g_img_cat->save();

        Session::flash('success','Successfully updated gallery category');
        return redirect()->route('admin.gallery-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $g_img_cat_id = Crypt::decrypt($id);
        $g_img_cat = GalleryCategory::where([['status',1],['id',$g_img_cat_id]])->update(['status' => 0]);
        Session::flash('success','Successfully deleted gallery category');
        return redirect()->route('admin.gallery-category');
    }
}
