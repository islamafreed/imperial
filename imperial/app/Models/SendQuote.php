<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendQuote extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'send_quotes';
    protected $guarded  = ['_token','id'];

     public static $rules = [
        'name'                      =>  'required',
        'email'                      =>  'required',
        'phone_no'                      =>  'required',
        'ocation_id'                      =>  'required',
        'estimated_guest'                      =>  'required',
        'req_date'                      =>  'required',
        'preferance_id'               => 'required',
    ];

    public static $messages = [

       'name.required'  =>'Your full name is required',
       'email.required'  =>'Your email is required',
       'phone_no.required'  =>'Your phone no is required',
       'ocation_id.required'  =>'Please select an ocation',
       'estimated_guest.required'  =>'Please select an ocation',
       'req_date.required'  =>'Please select an ocation',
       'preferance_id.required' => 'Please select your preferance',
       
    ];

    public function ocation()
    {
        return $this->belongsTo('App\Models\Ocation', 'ocation_id')->where('status',1);
    }

    public function preference()
    {
        return $this->belongsTo('App\Models\Preference', 'preferance_id')->where('status',1);
    }

    public function add_preference()
    {
        return $this->belongsTo('App\Models\AddPreference', 'add_preferance_id')->where('status',1);
    }
}
