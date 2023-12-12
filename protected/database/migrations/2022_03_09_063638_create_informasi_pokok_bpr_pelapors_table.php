<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiPokokBprPelaporsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_00', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',30); //1
            $table->string('nama_bpr',50); //2
            $table->string('alamat_bpr', 100); //3
            $table->string('kabupaten_kota_bpr', 30); //4
            $table->string('no_telepon', 30); //5
            $table->string('npwp', 30); //6
            $table->string('nama_penanggung_jawab_penyusun_laporan', 50); //7
            $table->string('bagian_divisi', 50); //8
            $table->string('no_telepon_penanggung_jawab_penyusun_laporan', 30); //9
            $table->string('email', 50); //10
            $table->string('nominal_deviden_yang_dibayar', 30); //11
            $table->string('tahun_rpus_rat',50); //12
            $table->string('bonus_tahunan_dan_tantiem', 30);
            $table->string('nama_kap_yang_mengaudit',50)->nullable();
            $table->string('nama_ap_yang_menandatangani_laporan_audit',50)->nullable();
            $table->string('pemeriksaan_ke_kap_yang_sama',30)->nullable();
            $table->string('nilai_nominal_per_lembar_saham', 30);
            $table->string('memiliki_izin_pva',20);
            $table->string('tanggal_izin_pva', 30)->nullable();
            $table->string('jumlah_pva',20)->nullable();
            $table->string('nama_ultimate_shareholder',50);
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
        Schema::dropIfExists('informasi_pokok_bpr_pelapors');
    }
}
