<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->char('NSS', 11)->unique();
			$table->double('weight', 3, 2);
			$table->double('height', 3, 2);
			$table->string('emergency_call', 12);
			$table->text('medical_details')->nullable();
			$table->boolean('active')->default(1);
			$table->decimal('latitude', 11, 8)->nullable();
			$table->decimal('longitude', 11, 8)->nullable();
			$table->rememberToken();
			$table->timestamps();
			$table->integer('persons_id')->unsigned()->unique();
			$table->integer('blood_types_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
