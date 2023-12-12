<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agunan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_agunan')->nullable();
            $table->string('nilai_pasar',50)->nullable();
            $table->string('nilai_bank',50)->nullable();
            $table->string('nilai_pengikat',40)->nullable();
            $table->string('agunan', 30)->nullable();
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
        Schema::dropIfExists('agunans');
    }
}
