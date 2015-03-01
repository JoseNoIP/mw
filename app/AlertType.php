<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AlertType extends Model {

	protected $table = 'alert_types';

	public function alerts(){
		return $this->hasMany('Mw\Alert', 'alert_types_id', 'id');
	}

}
