<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPendidikanPengalamanKerjaForm002 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_002', function (Blueprint $table) {
            $table->string('ttl',40)->nullable();
            $table->text('pendidikan')->nullable();
            $table->text('pengalaman_kerja')->nullable();
            $table->string('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_002', function (Blueprint $table) {
            //
        });
    }
}
