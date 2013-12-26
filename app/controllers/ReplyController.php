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

	public function __construct(Reply $reply) {
		// parent::__construct();
		$this->reply = $reply;
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
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 * @author 
	 **/
	public function postCreate() {
		if(Request::ajax()) {
			$this->reply->pid = Input::get('pid');
			$this->reply->type = 'topic';
			$this->reply->content = Input::get('content');
			print_r(Input::all());
			
			if($this->reply->save()) {
				// return Redirect::to('topic/show/'.$this->reply->pid);
				return Response::json($this->reply);
			}
		}
	}

	/**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
	public function getDelete($id) {
    $reply = Reply::find($id);
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
		$reply = Reply::find($id);
    if(empty($reply)) {
      return Redirect::to('topic');
    }
	}
}