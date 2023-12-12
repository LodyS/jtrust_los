<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianLiabilitasLainnyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_14', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',20);
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
        Schema::dropIfExists('rincian_liabilitas_lainnyas');
    }
}
