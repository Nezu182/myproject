<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MealController extends Controller
{
    public function home()
    {
        return view('user.home');
    }
    
    public function table()
    {
        return view('user.table');
    }
    
    public function edit()
    {
        return view('user.edit');
    }
    
    public function add()
    {
        return view('user.add');
    }
    
    public function calendar()
    {
        return view('user.calendar');
    }
    
    public function date()
    {
        return view('user.date');
    }
    
    public function top()
    {
        return view('layouts.top');
    }
}
