<?php

use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods', function($table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('title');
			$table->text('content');
			$table->integer('created_at');
			$table->integer('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('goods');
	}

}