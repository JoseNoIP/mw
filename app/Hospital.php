<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model {

	protected $table = 'hospitals';

	public function locations(){
		return $this->hasMany('Mw\Location', 'hospitals_id', 'id');
	}

	public function user(){
		return $this->belongsTo('Mw\User', 'users_id', 'id');
	}

}
