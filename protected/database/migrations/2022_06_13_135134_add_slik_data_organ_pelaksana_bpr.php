<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlikDataOrganPelaksanaBpr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_003', function (Blueprint $table) {
            $table->string('slik')->nullable();
            $table->string('ktp_kitas_kitap_paspor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_003', function (Blueprint $table) {
            //
        });
    }
}
