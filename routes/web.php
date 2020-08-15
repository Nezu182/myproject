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
    Route::get('table', 'User\MealController@table');
    Route::get('edit', 'User\MealController@edit');
    Route::get('add', 'User\MealController@add');
    Route::get('calendar', 'User\MealController@calendar');
    Route::get('date', 'User\MealController@date');
});
Auth::routes();

Route::get('top', 'User\MealController@top');


