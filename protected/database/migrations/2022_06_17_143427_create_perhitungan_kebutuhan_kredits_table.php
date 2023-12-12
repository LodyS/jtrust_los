<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerhitunganKebutuhanKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungan_kebutuhan_kredit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sandi_bpr',20)->nullable();
            $table->longText('keterangan')->nullable();
            $table->text('perhitungan_limit_executing')->nullable();
            $table->text('pembiayaan_yang_dapat_diberikan')->nullable();
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
        Schema::dropIfExists('perhitungan_kebutuhan_kredits');
    }
}
