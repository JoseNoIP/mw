<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersView extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('CREATE VIEW users_view AS
			SELECT users.id,
				users.persons_id,
				users.NSS,
				persons.name, 
				persons.lastname, 
				persons.second_lastname,
				persons.birthdate, 
				persons.phone,
				users.email,
				users.weight,
				users.height,
				users.emergency_call,
				users.medical_details,
				users.created_at,
				users.blood_types_id
			FROM users INNER JOIN persons 
			ON users.persons_id = persons.id');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('DROP VIEW users_view');
	}

}
