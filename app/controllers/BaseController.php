<?php

class BaseController extends Controller {

	protected $userModel;

	public function __construct()
	{
		$this->userModel = new User;
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout() {
		if (!is_null($this->layout)) {
			$this->layout = View::make($this->layout);
		}
		if(Auth::check())
		{
			$user = Session::get('user');
			if($user) {
				$this->user = DB::table('users')->find($user['uid']);
				$this->user->create = Carbon::createFromTimeStamp(strtotime($this->user->created_at))->diffForHumans();
				$this->user->update = Carbon::createFromTimeStamp(strtotime($this->user->updated_at))->diffForHumans();
				View::share('user', $this->user);
			}
		}
	}

}