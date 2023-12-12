<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyaratDanKondisiPenyediaanFasilitasKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarat_dan_kondisi_penyediaan_fasilitas_kredit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('loan_applicant_id')->nullable();
            $table->string('pertanyaan_id', 30)->nullable();
            $table->string('pelaksana')->nullable();
            $table->string('sifat_frekuensi_target_waktu')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('syarat_dan_kondisi_penyediaan_fasilitas_kredits');
    }
}
