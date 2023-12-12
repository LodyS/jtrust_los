<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembarOpinisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembar_opini_legal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('loan_applicant_id')->nullable();
            $table->text('lembar_opini')->nullable();
            $table->integer('section_head')->nullable();
            $table->integer('division_head')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('no_legal_opini')->nullable();
            $table->text('catatan')->nullable();
            $table->string('rekomendasi')->nullable();
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
        Schema::dropIfExists('lembar_opinis');
    }
}
