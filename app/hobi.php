<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hobi extends Model
{
    protected $table = 'hobi';

    //Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('hobi');

	//relasi many to many

	public function mahasiswa() {
	return $this->belongsToMany('App\modelmahasiswa', 'mahasiswa_hobi', 'id_hobi', 'id_mahasiswa');
	}

}
