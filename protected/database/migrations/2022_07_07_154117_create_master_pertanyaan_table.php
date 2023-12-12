<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPertanyaanTable extends Migration
{
    public function up()
    {
        Schema::create('master_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('pertanyaan')->nullable();
            $table->string('jenis_pertanyaan')->nullable();
            $table->string('sub_jenis_pertanyaan')->nullable();
            $table->longText('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_pertanyaan');
    }
}
