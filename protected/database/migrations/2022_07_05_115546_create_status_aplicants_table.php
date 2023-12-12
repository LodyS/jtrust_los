<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusAplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_aplicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('loan_applicant_id')->nullable();
            $table->datetime('tanggal_proses')->nullable();
            $table->string('status')->nullable()->default('Pending');
            $table->text('catatan')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('level_id')->nullable()->default(0);
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
        Schema::dropIfExists('status_aplicants');
    }
}
