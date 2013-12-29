<?php

class TopicController extends BaseController {

	protected $topic;
	protected $reply;
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	| Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function __construct(Topic $topic, Reply $reply) {
		// parent::__construct();
		$this->topic = $topic;
	}

	public function getIndex() {
		$topics = $this->topic->orderBy('created_at', 'DESC')->paginate(10);
		return View::make('topic/index', compact('topics'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @return void
	 * @author 
	 **/
	public function getShow($id) {
		$topic = Topic::find($id);
		if($topic) {
			$replies = Reply::where('pid', '=', $id)->orderBy('created_at', 'DESC')->take(10)->get();
		}
		return View::make('topic/view', compact('topic', 'replies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return void
	 * @author 
	 **/
	public function getCreate() {
		return View::make('topic/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 * @author 
	 **/
	public function postCreate() {
		$this->topic->title = Input::get('title');
		$this->topic->content = Input::get('content');
		if($this->topic->save()) {
			return Redirect::to('topic/show/'.$this->topic->id);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id) {
		$topic = Topic::find($id);
		return View::make('topic/edit', compact('topic'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id) {
		$topic = Topic::find($id);
		$topic->title = Input::get('title');
		$topic->content = Input::get('content');
		$topic->updated_at = time();
		if($topic->save()) {
			return Redirect::to('topic/show/'.$topic->id);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id) {
		$topic = Topic::find($id);
		return View::make('topic/delete', compact('topic'));
	}

	/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
	public function postDelete($id) {
		Topic::destroy($id);
		$topic = Topic::find($id);
		if(empty($topic)) {
			return Redirect::to('topic');
		}
	}

}