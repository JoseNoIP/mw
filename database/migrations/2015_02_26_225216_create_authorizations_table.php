<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authorizations', function(Blueprint $table)
		{
			$table->integer('users_id')->unsigned();
			$table->integer('users_authorized_id')->unsigned();
			$table->timestamps();
			$table->primary(['users_id', 'users_authorized_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('authorizations');
	}

}
