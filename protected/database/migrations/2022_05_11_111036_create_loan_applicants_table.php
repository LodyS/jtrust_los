<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_apply')->nullable();
            $table->string('produk_id')->nullable();
            $table->string('sandi_bpr')->nullable();
            $table->bigInteger('plafond')->unsigned()->nullable();
            $table->integer('tenor')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('user_id')->nullable()->unsigned();
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
        Schema::dropIfExists('loan_applicants');
    }
}
