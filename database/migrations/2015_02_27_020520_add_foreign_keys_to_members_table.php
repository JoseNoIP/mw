<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('members', function(Blueprint $table)
		{
			$table->foreign('locations_id')->references('id')->on('locations');
			$table->foreign('users_id')->references('id')->on('users');
			$table->foreign('roles_id')->references('id')->on('roles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('members', function(Blueprint $table)
		{
			$table->dropForeign('members_locations_id_foreign');
			$table->dropForeign('members_users_id_foreign');
			$table->dropForeign('members_roles_id_foreign');
		});
	}

}
