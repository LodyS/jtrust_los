<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanLabaRugiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_laba_rugi_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pos')->nullable();
            $table->string('posisi_tanggal_laporan')->nullable();
            $table->string('posisi_yang_sama_tahun_sebelumnya')->nullable();
            $table->integer('header_import_id')->nullable();
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
        Schema::dropIfExists('laporan_laba_rugi');
    }
}
