<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManajemenPertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manajemen_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelompok_pertanyaan')->nullable();
            $table->string('sub_kelompok_pertanyaan')->nullable();
            $table->text('detail_pertanyaan')->nullable();
            $table->integer('range_skor_minimal')->nullable();
            $table->integer('range_skor_maksimal')->nullable();
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
        Schema::dropIfExists('manajemen_pertanyaans');
    }
}
