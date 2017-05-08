<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts.home');
});

Route::resource('users', 'UsersController');

// Authentication routes...
Route::get('auth/userLogin', 'Auth\AuthController@getLogin');
Route::post('auth/userLogin', 'Auth\AuthController@postLogin');
Route::get('auth/userLogout', 'Auth\AuthController@getLogout');
Route::get('auth/vetLogin', 'Auth\AuthController@getLogin');
Route::post('auth/vetLogin', 'Auth\AuthController@postLogin');
Route::get('auth/vetLogout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/userRegister', 'Auth\AuthController@getRegister');
Route::post('auth/userRegister', 'Auth\AuthController@postRegister');
Route::get('auth/vetRegister', 'Auth\AuthController@getRegister');
Route::post('auth/vetRegister', 'Auth\AuthController@postRegister');