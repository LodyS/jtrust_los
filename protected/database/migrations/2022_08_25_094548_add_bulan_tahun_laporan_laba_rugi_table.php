<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBulanTahunLaporanLabaRugiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laporan_laba_rugi_table', function (Blueprint $table) {
            //$table->string('bulan')->nullable();
            //$table->string('tahun')->nullable();
            $table->string('sandi_bpr')->nullable();
            $table->string('sandi_coa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporan_laba_rugi_table', function (Blueprint $table) {
            //
        });
    }
}
