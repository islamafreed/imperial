<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookedDate extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'booked_dates';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'name'                      =>  'required',
        'email'                      =>  'required',
        'phone_no'                      =>  'required',
        'booked_date'                      =>  'required',
    ];

    public static $messages = [

       'name.required'  =>'Booked for person full name is required',
       'email.required'  =>'Booked for person email is required',
       'phone_no.required'  =>'Booked for person phone no is required',
       'booked_date.required'  =>'Booked date is required',
       
    ];
}
