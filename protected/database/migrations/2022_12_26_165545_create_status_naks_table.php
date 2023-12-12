<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusNaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_nak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('header')->nullable();
            $table->string('informasi_debitur')->nullable();
            $table->string('permohonan_debitur')->nullable();
            $table->string('fasilitas_debitur')->nullable();
            $table->string('informasi_grup_usaha')->nullable();
            $table->string('financial_highlight')->nullable();
            $table->string('kondisi_keuangan_debitur')->nullable();
            $table->string('prospek_dan_kinerja_usaha')->nullable();
            $table->string('kegiatan_usaha')->nullable();
            $table->string('manajemen_perusahaan')->nullable();
            $table->string('pemasaran')->nullable();
            $table->string('perhitungan_kebutuhan_kredit')->nullable();
            $table->string('legalitas')->nullable();
            $table->string('resume_hasil_observasi')->nullable();
            $table->string('agunan')->nullable();
            $table->string('kepatuhan')->nullable();
            $table->string('deviasi')->nullable();
            $table->string('usulan_kredit')->nullable();
            $table->string('disclaimer')->nullable();
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
        Schema::dropIfExists('status_naks');
    }
}
