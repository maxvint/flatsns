<?php

// use Date;

class Topic extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'topics';

	public function getDateFormat()
  {
  	return 'U';
  }



}