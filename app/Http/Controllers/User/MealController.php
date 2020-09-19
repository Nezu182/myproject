<?php

namespace App\Http\Controllers\User;



use Illuminate\Http\Request;
use App\Services\CalendarService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Meal; 



class MealController extends Controller
{
    public function home()
    {
        return view('user.home');
    }
    
    public function meal_hibetsu(Request $request)
    {
        // ミールテーブルからデータを取得するためにミールモデルをNEWする
        //$meal = new Meal;
        
        // ログインしているユーザーのユーザーIDを取得する
        //$user_id = Auth::id();
        //dd($user_id);
        
        //$meal->kcal = $kcal;
        //$meal->tansuikabutu = $tansuikabutu;
        //$meal->sisitu = $sisitu;
        //$meal->tanpakusitu = $tanpakusitu;
        //$meal->tousitu = $tousitu;
        //$meal->meal_date = Carbon::now();
        //$meal->save();
        
      $meal_date = $request->selectedDate;
      if ($meal_date != '') {
          
          $posts = Meal::where('meal_date', $meal_date)->get();
      } else {
          
          $posts = Meal::all();
      }
        
        return view('user.meal_hibetsu',['posts' => $posts, 'meal_date' => $meal_date]);
    }
    
    public function edit()
    {
        return view('user.edit');
    }
    
    public function add(Request $request)
    {
        return view('user.add');
    }
    
    public function create(Request $request)
    {
        $meal_data=array("created_at"=>'2020-09-19',"updated_at"=>'2020-09-19');
        DB::table('meals')->insert($meal_data);
        echo "Record inserted successfully.<br/>";
        return redirect('/');
        
        $this->validate($request, Meal::$rules);
        
        $meal = new Meal;
        $form = $request->all();
        
        unset($form['_token']);
        
        $meal->fill($form);
        $meal->save();
        
        return view('user.meal_hibetsu');
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
