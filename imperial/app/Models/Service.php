<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'services';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'title'                      =>  'required',
        'sub_title'                      =>  'required',
        'details'                      =>  'required',
    ];

    public static $messages = [

       'title.required'  =>'Service title is required',
       'sub_title.required'  =>'Service sub title is required',
       'details.required'  =>'Service details is required',
    ];
}
