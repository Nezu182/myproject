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
        // 合計値の変数の定義と初期化
        $total_kcal = 0;
        $total_sisitu = 0;
        $total_tousitu = 0;
        $total_tansuikabutu = 0;
        $total_tanpakusitu = 0;
        
        
        $meal_date = date_create();
        $meal_date = date_format($meal_date , 'Y-m-d');
       
        $meals = Meal::where('meal_date' , $meal_date )->get();
        
        if(count($meals) > 0){
            foreach($meals as $meal){
                $total_kcal += $meal->kcal;
                $total_sisitu += $meal->sisitu;
                $total_tousitu += $meal->tousitu;
                $total_tansuikabutu += $meal->tansuikabutu;
                $total_tanpakusitu += $meal->tanpakusitu;
            }
        }
        
        // $meals = Meal::where('user_id', 1)
        //     ->get()
        //     ->groupBy(function ($row) {
        //         return $row->name;
        //     })
        //     ->map(function ($value) {
        //         return $value->sum('kcal', 'tansuikabutu', 'sisitu', 'tanpakusitu','tousitu');
        //     });
           
        return view('user.home',  compact('meals', 'meal_date','total_kcal','total_sisitu','total_tousitu','total_tansuikabutu', 'total_tanpakusitu'));
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
        
      $meal_date = date_create($request->selectedDate);
      $meal_date = date_format($meal_date , 'Y-m-d');
      $obj = Meal::where('created_at' , 'like' , $meal_date )->get();

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
        $selectedDate = $request->selectedDate;
        
        return view('user.add', ['selectedDate' => $selectedDate]);
    }
    
    public function create(Request $request)
    {
        $meal_date = date_create($request->meal_date);
        $meal_date = date_format($meal_date , 'Y-m-d');
        
        $this->validate($request, Meal::$rules);
        
        $meal = new Meal;
        $form = $request->all();
        
        unset($form['_token']);
        
        $meal->fill($form);
        $meal->user_id = Auth::id();
        $meal->save();
        
        return redirect('user/meal_hibetsu?selectedDate='. $meal_date);
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
    
    public function delete (Request $request)
    {
        $meal = Meal::find($request->id);
        $meal->delete();
        return redirect ('user/meal_hibetsu?selectedDate=.');
    }
    
    
}
