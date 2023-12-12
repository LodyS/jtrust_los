<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForm00InformasiGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_00', function (Blueprint $table) {
            $table->string('nama_group',50)->nullable();
            $table->string('bidang_usaha_group',50)->nullable();
            $table->string('tahun_pendirian_group',10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_00', function (Blueprint $table) {
            //
        });
    }
}
