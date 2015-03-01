<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model {

	protected $table = 'blood_types';

	public function patients(){
		return $this->hasMany('Mw\Patient', 'blood_types_id', 'id');
	}

	public function donors(){

	}

	public function donates(){

	}

}
