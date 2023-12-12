<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOrganPelaksanaBprsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_003', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',30)->nullable();
            $table->string('nama_organ_pelaksana',50)->nullable();
            $table->string('alamat',50)->nullable();
            $table->string('nik',30)->unique()->nullable();
            $table->string('kepatuhan',30)->nullable();
            $table->string('manajemen_resiko',30)->nullable();
            $table->string('audit_intern',30)->nullable();
            $table->string('apu_dan_ppt',30)->nullable();
            $table->string('lainnya',30)->nullable();
            $table->string('tanggal_mulai_menjabat',30)->nullable();
            $table->string('no_surat_pengangkatan',30)->nullable();
            $table->string('tanggal_surat_pengangkatan',30)->nullable();
            $table->string('no_surat_penegasan',30)->nullable();
            $table->string('tanggal_no_surat_penegasan',30)->nullable();
            $table->string('komite_audit',30)->nullable();
            $table->string('komite_pemantauan_resiko',30)->nullable();
            $table->string('komite_remunerasi_dan_nominasi',30)->nullable();
            $table->bigInteger('header_id')->unsigned()->nullable();
            $table->timestamps();

            //$table->foreign('header_id')->references('id')->on('header');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_organ_pelaksana_bprs');
    }
}
