<?php

use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function($table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('title');
			$table->text('content');
			$table->integer('price')->unsigned();
			$table->smallInteger('views')->default(0);
			$table->smallInteger('replies')->default(0);
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
		Schema::drop('items');
	}

}