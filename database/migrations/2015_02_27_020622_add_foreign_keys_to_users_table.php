<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('persons_id')->references('id')->on('persons');
			$table->foreign('blood_types_id')->references('id')->on('blood_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('users_persons_id_foreign');
			$table->dropForeign('users_blood_types_id_foreign');
		});
	}

}
