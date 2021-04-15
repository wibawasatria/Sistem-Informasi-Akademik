<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    protected $table = 'hari';
    protected $primaryKey = 'hari_id';

    function jadwal_pelajaran(){
        return $this->hasOne('App\Jadwal_pelajaran','hari_id');
    }
    
}
