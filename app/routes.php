<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'HomeController@getIndex');
	Route::get('users', 'UserController@getIndex');

	
});

Route::group(array('after' => 'auth'), function()
{
	Route::get('/', 'HomeController@getIndex');
	Route::get('users', 'UserController@getIndex');

	
});