<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alert_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->text('detail')->nullable();
			$table->string('icon');
			$table->char('color', 7);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alert_types');
	}

}
