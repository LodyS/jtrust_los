<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCreditTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_credit_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('t_product_id')->unsigned();
            $table->string('code');
            $table->string('title');
            $table->integer('maksimal_rpc_persentase')->unsigned();
            $table->timestamp('modified_datetime')->useCurrent();
            $table->integer('modified_by');
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
        Schema::dropIfExists('t_credit_type');
    }
}
