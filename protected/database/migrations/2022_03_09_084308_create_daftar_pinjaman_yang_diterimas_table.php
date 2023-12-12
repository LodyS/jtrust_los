<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPinjamanYangDiterimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_007', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',30)->nullable();
            $table->string('nomor_cif',30)->nullable();
            $table->string('gol_kreditur',30)->nullable();
            $table->string('sandi_bank',30)->nullable();
            $table->string('lokasi_kreditur',30)->nullable();
            $table->string('jenis', 30)->nullable();
            $table->string('hubungan_dengan_bank',30)->nullable();
            $table->string('tanggal_mulai',30)->nullable();
            $table->string('tanggal_jatuh_tempo',30)->nullable();
            $table->string('suku_bunga_persentase', 30)->default(0.00)->nullable();
            $table->string('cara_perhitungan',30)->nullable();
            $table->string('plafon',30)->nullable();
            $table->string('jenis_agunan_yang_dijaminkan',30)->nullable();
            $table->string('nominal_agunan_yang_dijaminkan',30)->nullable();
            $table->string('baki_debet',30)->nullable();
            $table->string('biaya_transaksi_belum_diamortisasi',30)->nullable();
            $table->string('diskonto_belum_diamortisasi',30)->nullable();
            $table->string('baki_debet_neto',30)->nullable();
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
        Schema::dropIfExists('daftar_pinjaman_yang_diterimas');
    }
}
