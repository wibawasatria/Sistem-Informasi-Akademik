<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailKurikulum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detail_kurikulum', function (Blueprint $table) {
            $table->bigIncrements('detail_kurikulum_id');
            $table->integer('kurikulum_id');
            $table->integer('mata_pelajaran_id');
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
        Schema::dropIfExists('table_detail_kurikulum');
    }
}
