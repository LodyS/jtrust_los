<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspekDanKinerjaUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospek_dan_kinerja_usaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('keterangan')->nullable();
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
        Schema::dropIfExists('prospek_dan_kinerja_usahas');
    }
}
