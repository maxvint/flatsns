<?php

use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('replies', function($table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->integer('pid')->unsigned();
			$table->integer('uid')->unsigned();
			$table->string('type', 50);
			$table->text('content');
			$table->integer('created_at');
			$table->integer('updated_at');
			$table->boolean('is_del')->default(0);
			$table->index('created_at');
			$table->index('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('replies');
	}

}