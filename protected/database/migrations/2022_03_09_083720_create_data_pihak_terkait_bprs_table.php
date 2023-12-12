<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPihakTerkaitBprsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_005', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail',30)->nullable();
            $table->string('nama_pihak_terkait',50)->nullable();
            $table->string('no_identitas',30)->unique()->nullable();
            $table->string('alamat_pihak_terkait',100)->nullable();
            $table->string('jenis_pihak_terkait', 30)->nullable();
            $table->string('hubungan_pihak_terkait',30)->nullable();
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
        Schema::dropIfExists('data_pihak_terkait_bprs');
    }
}
