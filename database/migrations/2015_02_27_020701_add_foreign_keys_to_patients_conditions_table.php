<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToPatientsConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('patients_conditions', function(Blueprint $table)
		{
			$table->foreign('patients_id')->references('id')->on('patients');
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
		Schema::table('patients_conditions', function(Blueprint $table)
		{
			$table->dropForeign('patients_conditions_patients_id_foreign');
			$table->dropForeign('patients_conditions_conditions_id_foreign');
		});
	}

}
