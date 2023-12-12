<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortNaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_nak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('latar_belakang')->nullable();
            $table->longText('pembahasan')->nullable();
            $table->longText('usulan')->nullable();
            $table->longText('disclaimer')->nullable();
            $table->string('loan_applicant_id')->nullable();
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
        Schema::dropIfExists('short_naks');
    }
}
