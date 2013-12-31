<?php

class BaseController extends Controller {

	private $user;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout() {
		if (!is_null($this->layout)) {
			$this->layout = View::make($this->layout);
		}
		$user = Session::get('user');
		$this->user = DB::table('users')->find($user['uid']);
		View::share('user', $this->user);
	}

	

}