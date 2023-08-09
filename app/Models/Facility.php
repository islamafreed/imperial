<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'facilities';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'caption'                          =>  'required',
        'title'                          =>  'required',
        'details'                          =>  'required',
        'facility_cover_img' 					=>  'required|mimes:jpeg,jpg,png,svg',
    ];

    public static $messages = [
       'caption.required'      =>'Please enter a caption for facility',
       'title.required'      =>'Please enter a title for facility',
       'details.required'      =>'Please enter details for facility',
       'facility_cover_img.required'  =>'Facility cover image is required',
       'facility_cover_img.mimes'     =>'Format is Incorrect !',
    ];

    public function facility_img()
    {
        return $this->hasMany('App\Models\FacilityImg', 'facility_id')->where('status',1);
    }
}
