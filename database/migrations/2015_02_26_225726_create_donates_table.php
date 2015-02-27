<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donates', function(Blueprint $table)
		{
			$table->integer('blood_types_id')->unsigned();
			$table->integer('blood_types_receptor_id')->unsigned();
			$table->timestamps();
			$table->primary(['blood_types_id', 'blood_types_receptor_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('donates');
	}

}
