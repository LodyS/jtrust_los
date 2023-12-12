<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPinjamanGrupUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pinjaman_grup_usaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sandi_bpr')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('plafond');
            $table->string('informasi_grup_usaha')->nullable();
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
        Schema::dropIfExists('riwayat_pinjaman_grup_usahas');
    }
}
