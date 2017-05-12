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

Route::get('/', function(){
    if (\Auth::check()) {
    	return redirect('/pets');
    } else {
        return view('welcome');
    }
});

Route::post('/pets/{id}', 'PetsController@shotStore');

Route::resource('users', 'UsersController');

Route::resource('pets', 'PetsController');

Route::post('pets', 'PetsController@image');

// Authentication routes...
Route::get('auth/login', function(){
	return redirect('/');
});
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
