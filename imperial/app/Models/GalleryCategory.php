<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
     // protected $fillable = array('name');
    protected $table    = 'gallery_categories';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'name'                      =>  'required',
    ];

    public static $messages = [

       'name.required'  =>'Gallery category name is required',
     ];

     public function gallery_img()
    {
        return $this->hasMany('App\Models\GalleryImage', 'gallery_cat_id')->where('status',1);
    }

    public function images()
    {
        return $this->hasManyThrough(GImg::class, GalleryImage::class,"gallery_cat_id", "gallery_image_id");
    }    
}
