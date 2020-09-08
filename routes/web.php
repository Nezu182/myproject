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
    return view('welcome');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('home', 'User\MealController@home');
    Route::get('meal_hibetsu', 'User\MealController@meal_hibetsu');
    Route::get('edit', 'User\MealController@edit');
    Route::get('add', 'User\MealController@add');
    Route::get('calendar', 'CalendarController@calendar')->name('calendar');
    Route::get('date', 'User\MealController@date');
    Route::post('create', 'User\MealController@create');
});
Auth::routes();

Route::get('top', 'User\MealController@top');


