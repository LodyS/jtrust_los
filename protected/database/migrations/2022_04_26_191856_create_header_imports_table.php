<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_import', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_laporan')->nullable();
            $table->string('periode_waktu')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('sandi_bpr')->nullable();
            $table->string('nama_bpr')->nullable();
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
        Schema::dropIfExists('header_imports');
    }
}
