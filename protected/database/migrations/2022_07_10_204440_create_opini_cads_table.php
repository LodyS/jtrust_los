<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpiniCadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opini_cad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('loan_applicant_id')->nullable();
            $table->longText('penjelasan_mitigasi')->nullable();
            $table->longText('catatan')->nullable();
            $table->integer('section_head')->nullable();
            $table->integer('division_head')->nullable();
            $table->text('rekomendasi')->nullable();
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
        Schema::dropIfExists('opini_cads');
    }
}
