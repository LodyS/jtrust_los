<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('region_id')->nullable()->unsigned();
            $table->string('branch_code')->nullable();
            $table->string('branch_title')->nullable();
            $table->string('publish')->default(1);
            $table->integer('sortnumber')->nullable();
            $table->timestamp('modified_datetime')->useCurrent()->nullable();
            $table->integer('modified_by')->nullable();
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
        Schema::dropIfExists('branches');
    }
}
