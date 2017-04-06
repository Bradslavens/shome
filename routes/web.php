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

Auth::routes();

Route::get('home', 'HomeController@index');

// homes 
Route::get('homes', 'HomesController@index');

// show home details
Route::post('homes', 'HomesController@show');

// careers
Route::get('careers/{source?}', 'CareersController@create');

// careers app
Route::post('careers', 'CareersController@store');
