<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisSpt extends Model
{
	public $incrementing = false;
	protected $guarded = [];
	protected $primaryKey = 'id_spt';
	protected $keyType = 'string';
	
	public function registers(){
		return $this->hasMany('App\Register', 'id_spt', 'id_spt');
	}
}
