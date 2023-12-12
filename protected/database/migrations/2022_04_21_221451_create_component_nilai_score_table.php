<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentNilaiScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_nilai_score', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('score_min')->nullable();
            $table->string('score_max')->nullable();
            $table->string('description')->nullable();
            $table->string('publish')->default(1);
            $table->string('sort_number')->nullable();
            $table->integer('modified_by')->nullable();
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
        Schema::dropIfExists('component_nilai_score');
    }
}
