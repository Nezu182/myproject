<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/top');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('home', 'User\MealController@home')->middleware('auth');
    Route::get('meal_hibetsu', 'User\MealController@meal_hibetsu')->middleware('auth');
    Route::post('meal_hibetsu', 'User\MealController@meal_hibetsu')->middleware('auth');
    Route::get('edit', 'User\MealController@edit')->middleware('auth');
    Route::post('edit', 'User\MealController@update')->middleware('auth');
    Route::get('add', 'User\MealController@add')->middleware('auth');
    Route::post('add', 'User\MealController@create')->middleware('auth');
    Route::get('calendar', 'CalendarController@calendar')->name('calendar');
    Route::get('date', 'User\MealController@date');
    Route::get('delete', 'User\MealController@delete')->middleware('auth');
});
Auth::routes();

Route::get('home', 'User\MealController@top');


