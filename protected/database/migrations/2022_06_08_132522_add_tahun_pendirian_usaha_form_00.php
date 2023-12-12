<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTahunPendirianUsahaForm00 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_00', function (Blueprint $table) {
            $table->string('tahun_pendirian_usaha',50)->nullable();
            $table->string('jenis_usaha',30)->nullable();
            $table->string('bidang_usaha',30)->nullable();
            $table->string('bidang_ekonomi',30)->nullable();
            $table->string('sub_bidang_ekonomi',30)->nullable();
            $table->string('manajemen_inti_nama',50)->nullable();
            $table->string('manajemen_inti_jabatan',50)->nullable();
            $table->string('cp_nama',50)->nullable();
            $table->string('cp_jabatan',30)->nullable();
            $table->string('cp_no_telp',30)->nullable();
            $table->string('cp_email',30)->nullable();
            $table->string('group_usaha',50)->nullable();
            $table->string('nomor_cif',50)->nullable();
            $table->string('bulan_tahun_cif',50)->nullable();
            $table->string('jenis_usaha_lainnya',30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_00', function (Blueprint $table) {
            //
        });
    }
}
