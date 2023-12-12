<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiGrupUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_grup_usaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sandi')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('tahun_pendirian')->nullable();
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
        Schema::dropIfExists('informasi_grup_usahas');
    }
}
