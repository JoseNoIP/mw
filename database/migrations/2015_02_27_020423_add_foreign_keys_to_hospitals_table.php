<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToHospitalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hospitals', function(Blueprint $table)
		{
			$table->foreign('persons_id')->references('id')->on('persons');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hospitals', function(Blueprint $table)
		{
			$table->dropForeign('hospitals_persons_id_foreign');
		});
	}

}
