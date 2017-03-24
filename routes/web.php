<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});


Route::group(['middleware' => ['web'],'prefix' => 'vuejs'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('home');
    });

    // Route::get('/{vue_capture?}', array('before' => 'auth', 'uses' => 'HomeController@index'), function () {
    //         return view('home');
    // })->where('vue_capture', '[\/\w\.-]*');
});
