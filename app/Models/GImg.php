<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GImg extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'g_imgs';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'g_img'                      =>  'required|mimes:jpeg,jpg,png,svg',
    ];

    public static $messages = [
       'g_img.required'  =>'Gallery image is required',
       'g_img.mimes'     =>'Format is Incorrect !',
     ];

    public function gallery_cat()
    {
        return $this->belongsTo('App\Models\GalleryImage', 'gallery_image_id')->where('status',1);
    }
}
