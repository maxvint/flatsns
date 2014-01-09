<?php

class Item extends Eloquent {

	protected $table = 'items';
	protected $fillable = array('title', 'content');

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function __construct()
	{

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

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function getItemList($perPage = 10)
	{
		$result = $this->orderBy('created_at', 'desc')
									 ->paginate($perPage);
		return $result;
	}


}