<?php

class TopicController extends BaseController {

	protected $topic;
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

	public function __construct(Topic $topic)
	{
		// parent::__construct();
		$this->topic = $topic;
	}

	public function getIndex()
	{
		// var_dump(URL::current());
		// echo Route::currentRouteNamed()->getPath();
		// echo Route::getCurrentRoute()->getPath();
		$topics = $this->topic->orderBy('created_at', 'DESC')->paginate(10);
		return View::make('topic/index', compact('topics'));

	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function getShow($tid)
	{
		$topic = $this->topic->where('tid', '=', $tid)->first();
		return View::make('topic/view', compact('topic'));
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function getCreate()
	{
		
		return View::make('topic/create');
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function postCreate()
	{
		$this->topic->title = Input::get('title');
		$this->topic->content = Input::get('content');
		
		if($this->topic->save())
		{
			return Redirect::to('topic/show/'.$this->topic->id);
		}
	}



}