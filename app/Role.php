<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	protected $table = 'roles';

	public function members(){
		return $this->hasMany('Mw\Member', 'roles_id', 'id');
	}

}
