<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarRincianKantorBpr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_004', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',20);
            $table->string('sandi_kantor',20)->nullable();
            $table->string('nama_kantor',50)->nullable();
            $table->string('koordinat_kantor',50)->nullable();
            $table->string('nama_jalan_dan_no', 50)->nullable();
            $table->string('desa_kecamatan',50)->nullable();
            $table->string('kab_kota', 30)->nullable();
            $table->string('kode_pos',30)->nullable();
            $table->string('nama_pimpinan', 50)->nullable();
            $table->string('no_telp',30)->nullable();
            $table->string('jumlah_karyawan_tetap_s3',30)->nullable();
            $table->string('jumlah_karyawan_tetap_s2',30)->nullable();
            $table->string('jumlah_karyawan_tetap_s1',30)->nullable();
            $table->string('jumlah_karyawan_tetap_d3',30)->nullable();
            $table->string('jumlah_karyawan_tetap_slta',30)->nullable();
            $table->string('jumlah_karyawan_tetap_lainnya',30)->nullable();

            $table->string('jumlah_karyawan_tidak_tetap_s3',30)->nullable();
            $table->string('jumlah_karyawan_tidak_tetap_s2',30)->nullable();
            $table->string('jumlah_karyawan_tidak_tetap_s1',30)->nullable();
            $table->string('jumlah_karyawan_tidak_tetap_d3',30)->nullable();
            $table->string('jumlah_karyawan_tidak_tetap_slta',30)->nullable();
            $table->string('jumlah_karyawan_tidak_tetap_lainnya',30)->nullable();

            $table->string('jumlah_kantor_kas',30)->nullable();
            $table->string('status_kepemilikan_gedung',30)->nullable();
            $table->string('jumlah_kas_mobil_dan_kas_terapung',30)->nullable();
            $table->string('edc_milik_sendiri',30)->nullable();
            $table->string('edc_milik_bu',30)->nullable();
            $table->string('edc_milik_bpr_lain',30)->nullable();
            $table->string('jumlah_atm_diselenggarakan_sendiri',30)->nullable();
            $table->string('jumlah_atm_bekerja_sama_dengan_pihak_lain',30)->nullable();
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
        Schema::dropIfExists('daftar_rincian_kantor_bpr');
    }
}
