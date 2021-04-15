<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mata_pelajaran extends Model
{
    protected $table = 'mata_pelajaran';
    protected $primaryKey = 'mata_pelajaran_id';

    function jadwal_pelajaran(){
        return $this->hasOne('App\Mata_pelajaran','mata_pelajaran_id');
    }
}
