<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnMinimunRatioKomponenTksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komponen_tks', function (Blueprint $table) {
            $table->string('minimum_ratio', 20)->nullable();
            $table->string('perubahan_ratio', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komponen_tks', function (Blueprint $table) {
            //
        });
    }
}
