<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBmpksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmpk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sandi_bpr')->nullable();
            $table->string('modal_inti_bank')->nullable();
            $table->string('inhouse_modal_inti_bank')->nullable();
            $table->string('debitur_individu')->nullable();
            $table->string('inhouse_debitur_individu')->nullable();
            $table->string('debitur_group')->nullable();
            $table->string('inhouse_debitur_group')->nullable();
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
        Schema::dropIfExists('bmpks');
    }
}
