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

// Home Route
Route::get('/', 'HomeController@getIndex');

// User Route
Route::get('user', 'UserController@getIndex');
Route::get('user/login', 'UserController@getLogin');
Route::post('user/login', 'UserController@postLogin');
Route::get('user/logout', 'UserController@getLogout');
Route::get('user/register', 'UserController@getRegister');
Route::post('user/register', 'UserController@postRegister');
Route::get('user/forgotten', 'UserController@getForgotten');
Route::post('user/forgotten', 'UserController@postForgotten');


Route::group(array('before' => 'auth'), function()
{

	Route::get('/', 'HomeController@getIndex');

	// Topic Route

	// Route::get('topic/index', 'TopicController@getIndex');
	// Route::get('topic/show/{tid}', 'TopicController@getShow');
	// Route::get('topic/create', 'TopicController@getCreate');
	// Route::post('topic/create', 'TopicController@postCreate');

	Route::controller('topic', 'TopicController');

	Route::get('user/setting', 'UserController@getSetting');
	Route::get('user/avatar', 'UserController@getAvatar');
	Route::get('user/message', 'UserController@getMessage');
	Route::get('user/index', 'UserController@getIndex');
	Route::get('user/{uid}', 'UserController@getIndex');

	Route::controller('reply', 'ReplyController');
	// Route::post('reply/create', 'ReplyController@postCreate');


});