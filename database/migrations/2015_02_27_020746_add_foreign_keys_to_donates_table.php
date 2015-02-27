<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToDonatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('donates', function(Blueprint $table)
		{
			$table->foreign('blood_types_id')->references('id')->on('blood_types');
			$table->foreign('blood_types_receptor_id')->references('id')->on('blood_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('donates', function(Blueprint $table)
		{
			$table->dropForeign('donates_blood_types_id_foreign');
			$table->dropForeign('donates_blood_types_receptor_id_foreign');
		});
	}

}
