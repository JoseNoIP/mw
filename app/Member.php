<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {

	protected $table = 'members';

	public function user(){
		return $this->belongsTo('Mw\User', 'users_id', 'id');
	}

	public function role(){
		return $this->belongsTo('Mw\Role', 'roles_id', 'id');
	}

	public function location(){
		return $this->belongsTo('Mw\Location', 'locations_id', 'id');
	}

	public function updates(){
		return $this->hasMany('Mw\Update', 'members_id', 'id');
	}

}
