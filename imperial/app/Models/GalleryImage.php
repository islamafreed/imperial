<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'gallery_images';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'caption'                          =>  'required',
        'gallery_cat_id'                   =>  'required',
    ];

    public static $messages = [
       'caption.required'      =>'Please enter a caption for the picture',
       'gallery_cat_id.required' =>'Please select a gallery category',
    ];

    public function gallery_cat()
    {
        return $this->belongsTo('App\Models\GalleryCategory', 'gallery_cat_id')->where('status',1);
    }

    public function g_img()
    {
        return $this->hasMany('App\Models\GImg', 'gallery_image_id')->where('status',1);
    }
}
