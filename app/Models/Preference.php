<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    // protected $fillable = array('name');
    protected $table    = 'preferences';
    protected $guarded  = ['_token','id'];

    public static $rules = [
        'name'                      =>  'required',
    ];

    public static $messages = [

       'name.required'  =>'Ocation name is required',
    ];
}
