<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToAlertsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alerts', function(Blueprint $table)
		{
			$table->foreign('alert_types_id')->references('id')->on('alert_types');
			$table->foreign('updates_id')->references('id')->on('updates');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alerts', function(Blueprint $table)
		{
			$table->dropForeign('alerts_alert_types_id_foreign');
			$table->dropForeign('alerts_updates_id_foreign');
		});
	}

}
