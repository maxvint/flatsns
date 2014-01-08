<?php

class Item extends Eloquent {



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


}