<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBankSlikDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bank_slik_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_bank');
            $table->integer('sortnumber')->unsigned();
            $table->timestamp('modified_datetime')->useCurrent();
            $table->integer('modified_by')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bank_slik_data');
    }
}
