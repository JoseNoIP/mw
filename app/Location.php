<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	protected $table = 'locations';

	public function hospital(){
		return $this->belongsTo('Mw\Hospital', 'hospitals_id', 'id');
	}

	public function members(){
		return $this->hasMany('Mw\Member', 'locations_id', 'id');
	}

}
