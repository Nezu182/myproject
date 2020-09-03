<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Services\CalendarService;
use App\Http\Controllers\Controller;

use App\Meals; 

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
    
    public function add(Request $request)
    {
        $this->validate($request, Meals::$rules);
        
        $meal = new Meals;
        $form = $request->all();
        
        unset($form['_token']);
        
        $meal->fill($form);
        $meal->save();
        
        return view('user.add');
    }
    
    
    public function date(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title !='') {
            $posts = Meal::where('title', $cond_title)->get();
        } else {
            $posts = Meal::all();
        }
        return view('user.date', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function top()
    {
        return view('layouts.top');
    }
}
