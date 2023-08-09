<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageRequest extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'package_requests';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'package_id'                      =>  'required',
        'name'                      =>  'required',
        'email'                      =>  'required',
        'phone_no'                      =>  'required',
        'message'                      =>  'required',
    ];

    public static $messages = [

       'package_id.required'  =>'Please select a package',
       'name.required'  =>'Your full name is required',
       'email.required'  =>'Your email is required',
       'phone_no.required'  =>'Your phone no is required',
       'message.required'  =>'Your message is required',
       
    ];

    public function package()
    {
        return $this->belongsTo('App\Models\Package', 'package_id')->where('status',1);
    }
}
