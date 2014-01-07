<?php

class ReplyController extends BaseController {

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
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function __construct(Reply $reply, Topic $topic) {
		$this->reply = $reply;
		parent::__construct();
	}

	/**
	 * Display the specified resource.
	 *
	 * @return void
	 * @author
	 **/
	public function getShow($id) {
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return void
	 * @author
	 **/
	public function getCreate() {
		// echo Request::url();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 * @author
	 **/
	public function postCreate() {
		$this->reply->pid = Input::get('pid');
		$this->reply->uid = Auth::user()->id;
		$this->reply->type = 'topic';
		$this->reply->content = Input::get('content');
		if($this->reply->save()) {
			$this->reply->status = 'success';
			$this->reply->create = $this->reply->created_at->diffForHumans();
			// update replies
			$user = $this->userModel->getUserById($this->reply->uid);
			$this->reply->user = $user->toArray();
			$topic = Topic::find($this->reply->pid);
			$topic->increment('replies');
			return Response::json($this->reply);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id) {
		$reply = $this->reply->getReplyOne($id);
		// return View::make('topic/delete', compact('topic'));
	}

	/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
	public function postDelete($id) {
		Reply::destroy($id);
		$reply = $this->reply->getReplyOne($id);
		if(empty($reply)) {
			return Redirect::to('topic');
		}
	}
}