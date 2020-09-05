<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'kcal' => 'required',
        'tansuikabutu' => 'required',
        'sisitu' => 'required',
        'tanpakusitu' => 'required',
        'tousitu' => 'required',
    );
}
