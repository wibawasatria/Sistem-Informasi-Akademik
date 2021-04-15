<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->bigIncrements('guru_id');
            $table->string('nik');
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->integer('jp_id');
            $table->string('telepon');
            $table->string('foto');
            $table->string('status');
            $table->string('username');
            $table->string('password');
            $table->string('deleted');
            $table->string('agama');
            $table->string('jk_guru');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->boolean('aktif')->default(true);
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
        Schema::dropIfExists('guru');
    }
}
