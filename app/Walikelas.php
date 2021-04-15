<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    protected $table= 'walikelas';
    protected $primaryKey = 'walikelas_id';
    protected $fillable = ['kelas_id'];

    function guru(){
        return $this->belongsTo('App\Guru','guru_id');
    }

    function kelas(){
        return $this->belongsTo('App\Kelas','kelas_id');
    }
    
}
