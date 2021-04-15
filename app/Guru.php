<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'guru_id';

    function jenjang_pendidikan(){
        return $this->belongsTo('App\Jenjang_pendidikan','jp_id');
    }

    function walikelas(){
        return $this->hasOne('App\Walikelas','guru_id');
    }

    function jadwal_pelajaran(){
        return $this->hasOne('App\Jadwal_pelajaran','guru_id');
    }
}
