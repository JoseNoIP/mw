<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToAuthorizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('authorizations', function(Blueprint $table)
		{
			$table->foreign('users_id')->references('id')->on('users');
			$table->foreign('users_authorized_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('authorizations', function(Blueprint $table)
		{
			$table->dropForeign('authorizations_users_id_foreign');
			$table->dropForeign('authorizations_users_authorized_id_foreign');
		});
	}

}
