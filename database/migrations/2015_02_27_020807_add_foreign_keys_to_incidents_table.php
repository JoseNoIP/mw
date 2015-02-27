<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToIncidentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('incidents', function(Blueprint $table)
		{
			$table->foreign('users_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('incidents', function(Blueprint $table)
		{
			$table->dropForeign('incidents_users_id_foreign');
		});
	}

}
