<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \Conner\Tagging\Taggable;

class Blog extends Model
{
    use Taggable;

    // protected $fillable = array('name');
    protected $table    = 'blogs';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'name'                      =>  'required',
        'details' 					=> 	'required',
        'author_name' 				=>  'required',
        'blog_img' 					=>  'required|mimes:jpeg,jpg,png,svg',
    ];

    public static $messages = [
       'name.required'  =>'Blog name is required',
       'details.required' =>'Blog details is required',
       'author_name.required' =>'Blog author name is required',
       'blog_img.required'  =>'Blog image is required',
       'blog_img.mimes'     =>'Format is Incorrect !',
    ];
}
