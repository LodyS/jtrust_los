<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_header',20)->nullable();
            $table->string('kode_sektor',20)->nullable();
            $table->string('sandi_bpr',20)->nullable();
            $table->string('periode_data')->nullable();
            $table->string('kode_jenis_laporan',20)->nullable();
            $table->string('kode_form_laporan',20)->nullable();
            $table->string('kode_status_koreksi',20)->nullable();
            $table->string('nomor_surat',50)->nullable();
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
        Schema::dropIfExists('headers');
    }
}
