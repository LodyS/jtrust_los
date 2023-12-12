<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKetentuanDeviasiPertimbanganMitigasiDeviasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deviasi', function (Blueprint $table) {
            $table->longText('ketentuan')->nullable();
            $table->longText('deviasi')->nullable();
            $table->longText('pertimbangan_dan_mitigasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deviasi', function (Blueprint $table) {
            //
        });
    }
}
