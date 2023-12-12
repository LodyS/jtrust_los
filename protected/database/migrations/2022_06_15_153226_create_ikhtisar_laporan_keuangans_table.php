<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIkhtisarLaporanKeuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikhtisar_laporan_keuangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('periode',100)->nullable();
            $table->string('kap',100)->nullable();
            $table->string('registered',100)->nullable();
            $table->string('auditor',100)->nullable();
            $table->string('opinion',100)->nullable();
            $table->string('sandi_bpr')->nullable();
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
        Schema::dropIfExists('ikhtisar_laporan_keuangans');
    }
}
