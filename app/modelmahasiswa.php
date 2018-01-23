<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelmahasiswa extends Model
{

	protected $table = 'mahasiswa';
	//penambahan id_dosen 

	
	protected $fillable = array('nama', 'nim', 'id_dosen');


    public function dosen() {
		return $this->belongsTo('App\dosen', 'id_dosen');
	}

    public function wali() {
		return $this->hasOne('App\modelwali', 'id_mahasiswa');
	}

	public function hobi() {
		return $this->belongsToMany('App\hobi', 'mahasiswa_hobi', 'id_mahasiswa', 'id_hobi');
	}

	

}
?>