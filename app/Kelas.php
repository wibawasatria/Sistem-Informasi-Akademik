<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    
	protected $primaryKey = 'kelas_id';
	
   	function jurusan(){
		return $this->belongsTo('App\Jurusan','jurusan_id');
	}

	function tahunajaran(){
		return $this->belongsTo('App\Tahunajaran','tahun_ajaran_id');
	}

	function siswa(){
		return $this->hasOne('App\Siswa','kelas_id');
	}

	function walikelas(){
		return $this->hasOne('App\Walikelas','kelas_id');
	}

	function jadwal_pelajaran(){
		return $this->hasOne('App\Jadwal_pelajaran','kelas_id');
	}
}
