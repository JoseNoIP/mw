<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients_conditions', function(Blueprint $table)
		{
			$table->timestamps();
			$table->boolean('current');
			$table->integer('conditions_id')->unsigned();
			$table->integer('patients_id')->unsigned();
			$table->primary(['conditions_id', 'patients_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patients_conditions');
	}

}
