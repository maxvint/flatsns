<?php

class Reply extends Eloquent {

	private $userModel;

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function __construct()
	{
		$this->userModel = new User;
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public function getDateFormat()
	{
  	return 'U';
  }

  public function user()
	{
		return $this->belongsTo('User', 'uid');
	}

	/**
	 * getReplyOne
	 *
	 * @return void
	 * @author
	 **/
	public function getReplyOne($id)
	{
		return $this->find($id);
	}

  /**
   * undocumented function
   *
   * @return void
   * @author
   **/
  public function getReplyList($pid, $perPage = 10)
  {
  	$result = $this->where('pid', '=', $pid)
  								 ->with('user')
									 ->orderBy('created_at', 'desc')
									 ->paginate($perPage);

		if($result)
		{
			foreach($result as $key => &$value)
			{
				$value->create = $value->created_at->diffForHumans();
			}
		}
		return $result;
  }


}