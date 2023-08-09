<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'leads';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'name'                      =>  'required',
        'phone_no'                      =>  'required',
    ];

    public static $messages = [

       'name.required'  =>'Your full name is required',
       'phone_no.required'  =>'Your phone no is required',
    ];
}
