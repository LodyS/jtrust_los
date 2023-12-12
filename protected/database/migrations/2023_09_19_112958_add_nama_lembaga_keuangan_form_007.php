<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaLembagaKeuanganForm007 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_007', function (Blueprint $table) {
            $table->string('nama_lembaga_keuangan')->nullable();
            $table->string('jangka_waktu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_007', function (Blueprint $table) {
            //
        });
    }
}
