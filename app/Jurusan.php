<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'jurusan_id';

    function kelas(){
        return $this->hasOne('App\Kelas','jurusan_id');
    }
}
