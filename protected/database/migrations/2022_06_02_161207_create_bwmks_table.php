<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBwmksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bwmk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('karakter')->nullable();
            $table->string('nilai_kredit_minimum')->nullable();
            $table->string('nilai_kredit_maksimum')->nullable();
            $table->string('voting_member')->nullable();
            $table->string('non_voting_member')->nullable();
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
        Schema::dropIfExists('bwmks');
    }
}
