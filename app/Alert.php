<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model {

	protected $table = 'alerts';

	public function update(){
		return $this->belongsTo('Mw\Update', 'updates_id', 'id');
	}

	public function alertType(){
		return $this->belongsTo('Mw\AlertType', 'alert_types_id', 'id');
	}

}
