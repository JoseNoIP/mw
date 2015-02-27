<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_conditions', function(Blueprint $table)
		{
			$table->timestamps();
			$table->boolean('current');
			$table->integer('conditions_id')->unsigned();
			$table->integer('users_id')->unsigned();
			$table->primary(['conditions_id', 'users_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_conditions');
	}

}
