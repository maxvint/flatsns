<?php

class TopicController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		// echo URL::current();
		// echo URL::route('topic');
		return View::make('topic.index');

	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function postIndex()
	{
		return View::make('topic.post', compact('post'));
	}



}