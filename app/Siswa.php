<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $primaryKey = 'siswa_id';
    protected $table = 'siswa';

    function kelas(){
        return $this->belongsTo('App\Kelas', 'kelas_id');
    }
}
