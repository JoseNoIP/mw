<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersView extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('CREATE VIEW members_view AS
			SELECT members.persons_id, 
					members.id, 
					members.roles_id, 
					persons.name, 
					persons.lastname, 
					persons.second_lastname, 
					persons.birthdate, 
					persons.phone, 
					roles.name as role,
					members.created_at 
				FROM members INNER JOIN persons 
				ON members.persons_id=persons.id 
				LEFT JOIN roles 
				ON members.roles_id = roles.id');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('DROP VIEW members_view');
	}

}
