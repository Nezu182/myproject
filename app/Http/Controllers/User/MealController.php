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
           
        return view('user.home',  compact('meals', 'meal_date','total_kcal','total_sisitu','total_tousitu','total_tansuikabutu', 'total_tanpakusitu'));
    }
    
    public function meal_hibetsu(Request $request)
    {
        $meal_date = $request->selectedDate;
        if (empty($meal_date)) {
            $meal_date = date("Y-m-d");
        }
        if (!strptime($meal_date, '%Y-%m-%d')) {
            return redirect('user/calendar');
        }
        // 合計値の変数の定義と初期化
        $total_kcal = 0;
        $total_sisitu = 0;
        $total_tousitu = 0;
        $total_tansuikabutu = 0;
        $total_tanpakusitu = 0;
       
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
        
        $posts = Meal::where('meal_date', $meal_date)->get();
        return view('user.meal_hibetsu', ['posts' => $posts, 'meal_date' => $meal_date, 'total_kcal' => $total_kcal,'total_sisitu' =>$total_sisitu,'total_tousitu' =>$total_tousitu,'total_tansuikabutu' =>$total_tansuikabutu, 'total_tanpakusitu' => $total_tanpakusitu]);
    }
    
    public function edit(Request $request)
    {
        $meal_date = date_create($request->meal_date);
        $meal_date = date_format($meal_date , 'Y-m-d');
        
        $selectedDate = $request->selectedDate;
        
        $meal = Meal::find($request->id);
        if (empty($meal)) {
            abort(404);
        }
        
        return view('user.edit', ['selectedDate' => $meal_date, 'meal' => $meal]);
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
        $meal_date = date_create($meal->meal_date);
        $meal_date = date_format($meal_date , 'Y-m-d');
        
        $meal->delete();
        
        return redirect('user/meal_hibetsu?selectedDate='. $meal_date);
    }
    
    public function update (Request $request)
    {
        // dd($request);
        $this->validate($request, Meal::$rules);
        $meal = Meal::find($request->id);
        $meal_form = $request->all();
        unset($meal_form['_token']);
        // dd($meal_form);
        $meal->fill($meal_form)->save();
        // $meal->fill($redirect->all())->save();
        // dd($meal);
        return redirect('user/meal_hibetsu?selectedDate='. $meal->meal_date);
    }
    
}
