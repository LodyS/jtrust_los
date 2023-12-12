<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBulanTahunLaporanAsetProduktifTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laporan_aset_produktif', function (Blueprint $table) {
            $table->string('sandi_bpr')->nullable();
            $table->string('tahun')->nullable();
            $table->string('bulan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporan_aset_produktif', function (Blueprint $table) {
            //
        });
    }
}
