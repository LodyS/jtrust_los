<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdateSatuOpiniCadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opini_cad', function (Blueprint $table) {
            $table->string('penjelasan_agunan_fixed_asset')->nullable();
            $table->string('fixed_asset_non_marketable')->nullable();
            $table->string('opini')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opini_cad', function (Blueprint $table) {
            //
        });
    }
}
