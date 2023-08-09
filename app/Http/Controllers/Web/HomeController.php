<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Facility, App\Models\GalleryCategory, App\Models\GalleryImage, App\Models\GImg, App\Models\Ocation, App\Models\Preference, App\Models\AddPreference, App\Models\Package;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::where('status',1)->get();
        $gallery_imgs = GalleryImage::with('gallery_cat','g_img')->where('status',1)->inRandomOrder()->get();
        $ocations = Ocation::where('status',1)->get();
        $preferances = Preference::where('status',1)->get();
        $add_preferances = AddPreference::where('status',1)->get();
        $packages = Package::where('status',1)->orderBy('id','desc')->get();
        return view('home.index',compact('facilities','gallery_imgs','ocations','preferances','add_preferances','packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
