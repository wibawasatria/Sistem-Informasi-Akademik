<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahunajaran extends Model
{
    protected $table = 'tahun_ajaran';
    protected $primaryKey = 'tahun_ajaran_id';

    function kelas(){
        return $this->hasOne('App\Tahunajaran','tahun_ajaran_id');
    }

    function jadwal_pelajaran(){
        return $this->hasOne('App\Jadwal_pelajaran','tahun_ajaran_id');
    }
}
