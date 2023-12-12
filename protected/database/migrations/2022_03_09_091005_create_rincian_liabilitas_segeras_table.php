<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianLiabilitasSegerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_10', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',30);
            $table->string('sandi_kantor', 30);
            $table->string('sandi_pos',30);
            $table->string('jumlah',30);
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
        Schema::dropIfExists('rincian_liabilitas_segeras');
    }
}
