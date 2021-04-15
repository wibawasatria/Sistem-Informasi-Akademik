<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_pelajaran extends Model
{
    protected $table = 'jadwal_pelajaran';
    protected $primaryKey = 'jadwal_pelajaran_id';

    function guru(){
        return $this->belongsTo('App\Guru','guru_id');
    }

    function kelas(){
        return $this->belongsTo('App\Kelas','kelas_id');
    }

    function tahun_ajaran(){
        return $this->belongsTo('App\Tahunajaran','tahun_ajaran_id');
    }

    function mata_pelajaran(){
        return $this->belongsTo('App\Mata_pelajaran','mata_pelajaran_id');
    }

    function hari(){
        return $this->belongsTo('App\Hari','hari_id');
    }
}
