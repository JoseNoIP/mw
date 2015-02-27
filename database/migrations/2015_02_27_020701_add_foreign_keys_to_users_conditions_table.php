<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUsersConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_conditions', function(Blueprint $table)
		{
			$table->foreign('users_id')->references('id')->on('users');
			$table->foreign('conditions_id')->references('id')->on('conditions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_conditions', function(Blueprint $table)
		{
			$table->dropForeign('users_conditions_users_id_foreign');
			$table->dropForeign('users_conditions_conditions_id_foreign');
		});
	}

}
