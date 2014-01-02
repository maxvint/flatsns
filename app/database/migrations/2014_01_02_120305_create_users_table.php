<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('email', 50)->unique();
			$table->string('username', 40);
			$table->string('password', 100);
			$table->string('avatar', 100);
			$table->string('homepage', 50);
			$table->integer('money')->default(0);
			$table->integer('replies')->default(0);
			$table->smallInteger('notices')->default(0);
			$table->integer('follows')->default(0);
			$table->integer('created_at');
			$table->integer('updated_at');
			$table->smallInteger('gid')->default(3)->unsigned();
			$table->string('ip', 15);
			$table->string('location', 128);
			$table->string('token', 40);
			$table->text('introduction');
			$table->integer('is_active')->default(1);
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
		Schema::drop('users');
	}

}