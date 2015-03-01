<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model {

	protected $table = 'patients';

	public function conditions(){
		return $this->belongsToMany('Mw\Condition', 'patients_conditions', 'patients_id', 'conditions_id');
	}

	public function authorizations(){
		
	}

	public function authorized(){

	}

	public function user(){
		return $this->belongsTo('Mw\User', 'users_id', 'id');
	}

	public function incidents(){
		return $this->hasMany('Mw\Incident', 'patients_id', 'id');
	}

	public function bloodType(){
		return $this->belongsTo('Mw\BloodType', 'blood_types_id', 'id');
	}

}
