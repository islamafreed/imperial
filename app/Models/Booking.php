<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'bookings';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'name'                      =>  'required',
        'email'                      =>  'required',
        'phone_no'                      =>  'required',
        'booking_date'                      =>  'required',
    ];

    public static $messages = [

       'name.required'  =>'Your full name is required',
       'email.required'  =>'Your email is required',
       'phone_no.required'  =>'Your phone no is required',
       'booking_date.required'  =>'Your booking date is required',
       
    ];
}
