<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelwali extends Model
{
    protected $table = 'wali';

    // # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)

	protected $fillable = array('nama', 'id_mahasiswa');

	//relasi one to one 

	public function mahasiswa() {
		return $this->belongsTo('App\modelmahasiswa', 'id_mahasiswa');
	}

}
?>
