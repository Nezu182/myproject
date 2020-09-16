<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'meal_date => required',
        'kcal' => 'required',
        'tansuikabutu' => 'required',
        'sisitu' => 'required',
        'tanpakusitu' => 'required',
        'tousitu' => 'required',
    );
    
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
