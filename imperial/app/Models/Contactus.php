<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'contactuses';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'name'                      =>  'required',
        'email'                      =>  'required',
        'phone_no'                      =>  'required',
        'message'                      =>  'required',
    ];

    public static $messages = [

       'name.required'  =>'Your full name is required',
       'email.required'  =>'Your email is required',
       'phone_no.required'  =>'Your phone no is required',
       'message.required'  =>'Your message is required',
       
    ];
}
