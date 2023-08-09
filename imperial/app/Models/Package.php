<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \Conner\Tagging\Taggable;

class Package extends Model
{
	use Taggable;

    // protected $fillable = array('name');
    protected $table    = 'packages';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'name'                      =>  'required',
        'package_price'                      =>  'required',
        'package_img' 					=>  'required|mimes:jpeg,jpg,png,svg',
    ];

    public static $messages = [

       'name.required'  =>'Package name is required',
       'package_price.required'  =>'Package price is required',
       'package_img.required'  =>'Package image is required',
       'package_img.mimes'     =>'Format is Incorrect !',
     ];
}
