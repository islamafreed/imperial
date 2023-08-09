<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session,DB,Crypt,Validator,Auth,Str,Image;

use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::where('status',1)->orderBy('id','desc')->get();
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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

         $rules = Blog::$rules;
         $messages = Blog::$messages;

         $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
         }

            $blog = new Blog();
          
            $blog->name = $request->name;
            $blog->slug = Str::slug($request->name, '-');
            $blog->details = $request->details;
            $blog->author_name = $request->author_name;
            $today = date('Y-m-d H:i:s');
            $blog->publish_date = $today;

            if($request->blog_date != ''){
            $req_date1 = $request->blog_date;
            $tdr1 = str_replace("/", "-", $req_date1);
            $new_blog_date = date('Y-m-d',strtotime($tdr1));
                }
            else
                $new_blog_date = " ";

            $blog_date1 = $new_blog_date;
            $blog->blog_date = $blog_date1;
           
            $blog_img_slug = Str::slug($request->blog_img, '-');

            // dd($blog_img_slug);
           
            if( $request->hasFile('blog_img'))
            {
                // dd('has file');

                $file=$request->file('blog_img');

                // $imageName=str_random(6).$file->getClientOriginalName();
                $imageName = strtolower(uniqid()).'_'.$blog_img_slug.'.'.$file->getClientOriginalExtension();
                $destinationPathSmall=str_replace('\\', '/', public_path().'/uploads/blog/small');
                $image=Image::make($file->getRealPath());

                $image->resize(750,500)->save($destinationPathSmall.'/'.$imageName);
                
                $destinationPath=str_replace('\\', '/', public_path().'/uploads/blog');
                $file->move($destinationPath,$imageName);
                $blog->blog_img = $imageName;
            }

            $blog->save();
          
            $blog->tag($tags);
            $blog->save();

         
      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully saved blog details');
        return redirect()->route('admin.blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog_id = Crypt::decrypt($id);
        $blog = Blog::where([['status',1],['id',$blog_id]])->first();
        $tags = [];
          foreach ($blog->tags as $tag) {
            // array_push($tags, $tag->name);
            $tags[$tag->id] = $tag->name;
        }
        return view('admin.blog.show',compact('blog','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog_id = Crypt::decrypt($id);
        $blog = Blog::where([['status',1],['id',$blog_id]])->first();
        $tags = [];
          foreach ($blog->tags as $tag) {
            // array_push($tags, $tag->name);
            $tags[$tag->id] = $tag->name;
        }
        return view('admin.blog.edit',compact('blog','tags'));
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
        $blog_id = Crypt::decrypt($id);
        $blog = Blog::where([['status',1],['id',$blog_id]])->first();
        $tags = "";
        $tags = explode(',', $request->tags);

        $blog->untag();
        $blog->save();

        $rules = Blog::$rules;
        $messages = Blog::$messages;

        if ($blog->blog_img) {
            $rules['blog_img'] = str_replace("required", "nullable", $rules['blog_img']);
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog->name = $request->name;
        $blog->slug = Str::slug($request->name, '-');
        $blog->details = $request->details;
        $blog->author_name = $request->author_name;
        $today = date('Y-m-d H:i:s');
        $blog->publish_date = $today;

        if($request->blog_date != ''){
        $req_date1 = $request->blog_date;
        $tdr1 = str_replace("/", "-", $req_date1);
        $new_blog_date = date('Y-m-d',strtotime($tdr1));
            }
        else
            $new_blog_date = " ";

        $blog_date1 = $new_blog_date;
        $blog->blog_date = $blog_date1;
       
        $blog_img_slug = Str::slug($request->blog_img, '-');

        // dd($blog_img_slug);
       
        if( $request->hasFile('blog_img'))
        {
            // dd('has file');

            $file=$request->file('blog_img');

            // $imageName=str_random(6).$file->getClientOriginalName();
            $imageName = strtolower(uniqid()).'_'.$blog_img_slug.'.'.$file->getClientOriginalExtension();
            $destinationPathSmall=str_replace('\\', '/', public_path().'/uploads/blog/small');
            $image=Image::make($file->getRealPath());

            $image->resize(750,500)->save($destinationPathSmall.'/'.$imageName);
            
            $destinationPath=str_replace('\\', '/', public_path().'/uploads/blog');
            $file->move($destinationPath,$imageName);
            $blog->blog_img = $imageName;
        }

        $blog->save();
      
        $blog->tag($tags);
        $blog->save();

        Session::flash('success','Successfully updated blog details');
        return redirect()->route('admin.blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_id = Crypt::decrypt($id);
        $blog = Blog::where([['status',1],['id',$blog_id]])->update(['status'=>0]);
        Session::flash('success','Successfully deleted blog details');
        return redirect()->route('admin.blog');
    }
}
