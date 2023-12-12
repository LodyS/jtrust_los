<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnggotaDireksiDanKomisarisBprTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_002', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',30)->nullable();
            $table->string('nama',50)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('nik',30)->nullable();
            $table->string('jabatan',30)->nullable();
            $table->string('tanggal_mulai_menjabat',30)->nullable();
            $table->string('tanggal_selesai_menjabat',30)->nullable();
            $table->string('no_sk',30)->nullable();
            $table->string('tanggal_sk',30)->nullable();
            $table->string('sertifikat_kompetensi_kerja_berlaku',30)->nullable();
            $table->string('tanggal_berakhir_masa_berlaku_sertifikat_kompetensi_kerja',30)->nullable();
            $table->string('pendidikan_terakhir',30)->nullable();
            $table->string('tanggal_kelulusan',30)->nullable();
            $table->string('nama_lembaga', 50)->nullable();
            $table->string('jenis_pelatihan_terakhir',50)->nullable();
            $table->string('tanggal_pelatihan',30)->nullable();
            $table->string('lembaga_penyelenggara',50)->nullable();
            $table->string('komite_audit',30)->nullable();
            $table->string('komite_pemantauan',30)->nullable();
            $table->string('komite_remunerasi_dan_nominasi',30)->nullable();
            $table->string('membawahkan_fungsi_kepatuhan',30)->nullable();
            $table->string('komisaris_independen',30)->nullable();
            $table->bigInteger('header_id')->unsigned()->nullable();
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
        Schema::dropIfExists('data_anggota_direksi_dan_komisaris_bpr');
    }
}
