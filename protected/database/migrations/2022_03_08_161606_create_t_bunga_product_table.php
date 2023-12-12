<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBungaProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bunga_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('t_credit_type_id');
            $table->integer('bulan')->unsigned();
            $table->string('flat_rates');
            $table->string('anuitas_rates');
            $table->string('admin_fee');
            $table->string('asuransi_fee');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bunga_product');
    }
}
