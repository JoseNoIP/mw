<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model {

	protected $table = 'conditions';

	public function patients(){
		return $this->belongsToMany('Mw\Patients', 'patients_conditions', 'patients_id', 'conditions_id');
	}
}
