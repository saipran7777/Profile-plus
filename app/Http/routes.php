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
Route::get('auth/login', 'AuthController@getLogin');
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@getLogout');
Route::get('/addskills',array('middleware'=>'auth','uses'=>'SkillController@create'));
Route::post('/addskills',array('middleware'=>'auth','uses'=>'SkillController@store'));
Route::get('/skills',array('middleware'=>'auth','uses'=>'SkillController@show'));
Route::get('/addPOR',array('middleware'=>'auth','uses'=>'PORController@create'));
Route::post('/addPOR',array('middleware'=>'auth','uses'=>'PORController@store'));
Route::get('/PORs',array('middleware'=>'auth','uses'=>'PORController@show'));
Route::get('Home', ['middleware' => 'auth' ,function(){
	return view('Home');
}]);