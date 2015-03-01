<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model {

	protected $table = 'incidents';

	public function updates(){
		return $this->hasMany('Mw\Update', 'incidents_id', 'id');
	}

	public function patient(){
		return $this->belongsTo('Mw\Patient', 'patients_id', 'id');
	}

}
