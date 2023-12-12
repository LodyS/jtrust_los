<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiduciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiducia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tanggal_menjadi_anggota', 20)->nullable();
            $table->string('no_akad', 30)->nullable();
            $table->string('produk', 50)->nullable();
            $table->string('nama_peminjam', 50)->nullable();
            $table->string('cabang', 50)->nullable();
            $table->string('kota', 50)->nullable();
            $table->string('plafond', 50)->nullable();
            $table->string('os', 50)->nullable();
            $table->string('tanggal_pencairan', 50)->nullable();
            $table->string('jangka_waktu', 30)->nullable();
            $table->string('status', 30)->nullable();
            $table->string('tujuan_penggunaan', 100)->nullable();
            $table->string('hari_tunggakan',20)->nullable();
            $table->string('kolektibilitas',10)->nullable();
            $table->string('loan_applicant_id', 50)->nullable();
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
        Schema::dropIfExists('fiducias');
    }
}
