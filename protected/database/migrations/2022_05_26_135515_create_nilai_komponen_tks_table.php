<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiKomponenTksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_komponen_tks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sub_komponen')->nullable();
            $table->string('nilai_min')->nullable();
            $table->string('nilai_max')->nullable();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_komponen_tks');
    }
}
