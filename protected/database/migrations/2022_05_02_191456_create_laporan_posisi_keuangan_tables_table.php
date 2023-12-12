<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPosisiKeuanganTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_posisi_keuangan_table', function (Blueprint $table) {
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
        Schema::dropIfExists('laporan_posisi_keuangan_tables');
    }
}
