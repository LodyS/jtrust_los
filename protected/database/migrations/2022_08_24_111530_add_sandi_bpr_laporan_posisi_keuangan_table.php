<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSandiBprLaporanPosisiKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laporan_posisi_keuangan_table', function (Blueprint $table) {
            $table->string('sandi_bpr')->nullable();
            //$table->string('bulan', 30)->nullable();
            //$table->string('tahun', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporan_posisi_keuangan_table', function (Blueprint $table) {
            //
        });
    }
}
