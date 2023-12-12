<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanPertanyaanBprsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_pertanyaan_bpr', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sandi_bpr')->nullable();
            $table->integer('pertanyaan_id')->nullable();
            $table->integer('score')->nullable();
            $table->longText('keterangan')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('jawaban_pertanyaan_bprs');
    }
}
