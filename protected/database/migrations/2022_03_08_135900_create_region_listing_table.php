<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region_listing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('region_code');
            $table->string('region_title');
            $table->string('publish')->default(1);
            $table->integer('sortnumber');
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
        Schema::dropIfExists('region_listing');
    }
}
