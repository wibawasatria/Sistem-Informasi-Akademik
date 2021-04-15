<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang_pendidikan extends Model
{
    protected $table = 'jenjang_pendidikan';
    protected $primaryKey = 'jp_id';

    function guru(){
        return $this->hasOne('App\Guru','jp_id');
    }
}
