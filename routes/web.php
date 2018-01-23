<?php
use App\modelmahasiswa;
use App\modelwali;
use App\dosen;
use App\hobi;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('relasi-1', function() {
$mahasiswa = modelmahasiswa::where('nim', '=', '1015015072')->first();
return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function() {
$mahasiswa = modelmahasiswa::where('nim', '=', '1015015072')->first();
return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function() {
$dosen = dosen::where('nama', '=', 'Yulianto')->first();
foreach ($dosen->mahasiswa as $temp)
echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
	});

Route::get('relasi-4', function() {
$novay = modelmahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();
foreach ($novay->hobi as $temp) 
echo '<li>' . $temp->hobi . '</li>';
	});

Route::get('relasi-5', function() {
$mandi_hujan = hobi::where('hobi', '=', 'Mandi Hujan')->first();
foreach ($mandi_hujan->mahasiswa as $temp)
echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';

	});

Route::get('eloquent', function() {
$mahasiswa = modelmahasiswa::with('wali', 'dosen', 'hobi')->get();
return View::make('eloquent', compact('mahasiswa'));
	});



?>
