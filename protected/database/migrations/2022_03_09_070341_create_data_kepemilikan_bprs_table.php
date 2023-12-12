<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKepemilikanBprsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_001', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flag_detail', 30);
            $table->string('nama', 50);
            $table->string('alamat', 100)->nullable();
            $table->string('jenis',50);
            $table->string('no_identitas',50)->unique()->nullable();
            $table->string('psp',50);
            $table->string('jumlah_nominal',50);
            $table->string('persentase_kepemilikan',30)->default(0.00);
            $table->bigInteger('header_id')->unsigned()->nullable();
            $table->string('sandi_bpr')->nullable();
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
        Schema::dropIfExists('data_kepemilikan_bprs');
    }
}
