<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianRasioKeuanganTriwulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_008', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',30);
            $table->string('sandi_pos',30);
            $table->string('nilai_rasio', 30)->default('0.00');
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
        Schema::dropIfExists('rincian_rasio_keuangan_triwulans');
    }
}
