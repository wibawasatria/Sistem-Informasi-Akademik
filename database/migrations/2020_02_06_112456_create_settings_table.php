<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_sekolah');
            $table->string('akreditasi');
            $table->string('status');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->string('fax');
            $table->boolean('siswa_update_data')->default(false);
            $table->boolean('siswa_lihat_siswa')->default(false);
            $table->boolean('siswa_lihat_guru')->default(false);
            $table->boolean('guru_update_data')->default(false);
            $table->boolean('guru_lihat_data_guru')->default(false);
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
        Schema::dropIfExists('settings');
    }
}
