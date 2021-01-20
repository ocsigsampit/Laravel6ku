<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
	//protected $guarded = [];
	public $incrementing = false;
	protected $primaryKey = 'id';
	protected $keyType = 'string';

	protected $fillable = ['id_pegawai', 'id_spt', 'no_register', 'tgl_terima', 'jumlah_spt', 'id_pengemasan', 'espt', 'keterangan'];

	public function jenisspts(){
		return $this->belongTo('App\JenisSpt');
	}
}
