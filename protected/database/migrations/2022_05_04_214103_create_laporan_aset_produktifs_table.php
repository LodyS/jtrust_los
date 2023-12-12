<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanAsetProduktifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_aset_produktif', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pos')->nullable();
            $table->string('l')->nullable();
            $table->string('dpk')->nullable();
            $table->string('kl')->nullable();
            $table->string('d')->nullable();
            $table->string('m')->nullable();
            $table->string('jumlah')->nullable();
            $table->integer('header_import_id')->nullable();
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
        Schema::dropIfExists('laporan_aset_produktifs');
    }
}
