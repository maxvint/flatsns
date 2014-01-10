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
			$this->user = Auth::user();
			$this->user->create = Carbon::createFromTimeStamp(strtotime($this->user->created_at))->diffForHumans();
			$this->user->update = Carbon::createFromTimeStamp(strtotime($this->user->updated_at))->diffForHumans();
			View::share('user', $this->user);
		}
	}

}