<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_product_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('product_title');
            $table->integer('sortnumber')->unsigned();
            $table->timestamp('modified_datetime')->useCurrent();
            $table->integer('modified_by')->unsigned();
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
        Schema::dropIfExists('t_product_type');
    }
}
