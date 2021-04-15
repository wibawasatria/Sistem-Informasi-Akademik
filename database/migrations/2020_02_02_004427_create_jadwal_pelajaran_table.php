<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->bigIncrements('jadwal_pelajaran_id');
            $table->integer('tahun_ajaran_id');
            $table->integer('guru_id');
            $table->integer('mata_pelajaran_id');
            $table->integer('kelas_id');
            $table->integer('hari_id');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_pelajaran');
    }
}
