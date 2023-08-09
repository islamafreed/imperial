<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityImg extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'facility_imgs';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'facility_img' 					=>  'required|mimes:jpeg,jpg,png,svg',
    ];

    public static $messages = [
       'facility_img.required'  =>'Facility image is required',
       'facility_img.mimes'     =>'Format is Incorrect !',
    ];

    public function facility()
    {
        return $this->belongsTo('App\Models\Facility', 'facility_id')->where('status',1);
    }
}
