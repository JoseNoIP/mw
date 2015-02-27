<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUpdatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('updates', function(Blueprint $table)
		{
			$table->foreign('incidents_id')->references('id')->on('incidents');
			$table->foreign('members_id')->references('id')->on('members');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('updates', function(Blueprint $table)
		{
			$table->dropForeign('updates_incidents_id_foreign');
			$table->dropForeign('updates_members_id_foreign');
		});
	}

}
