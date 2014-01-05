<?php

use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function($table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->integer('uid')->unsigned();
			$table->string('title');
			$table->text('content');
			$table->integer('created_at');
			$table->integer('updated_at');
			$table->integer('replied_at');
			$table->smallInteger('views')->default(0);
			$table->smallInteger('replies')->default(0);
			$table->boolean('is_top')->default(0);
			$table->boolean('is_hide')->default(0);
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
		Schema::drop('topics');
	}

}