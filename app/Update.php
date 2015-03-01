<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model {

	protected $table = 'updates';

	public function member(){
		return $this->belongsTo('Mw\Member', 'members_id', 'id');
	}

	public function alert(){
		return $this->hasOne('Mw\Alert', 'updates_id', 'id');
	}

	public function incident(){
		return $this->belongsTo('Mw\Incident', 'incidents_id', 'id');
	}

}
