<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';

    //attribut yang boleh di isi 
    protected $fillable = array('nama', 'nipd');

    //Relasi One-to-Many

    public function mahasiswa() {
		return $this->hasMany('App\modelmahasiswa', 'id_dosen');
	}
}
