<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpiniCadDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opini_cad_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('opini_cad_id')->nullable();
            $table->text('catatan_rekomendasi_mitigasi')->nullable();
            $table->string('sub_judul')->nullable();
            $table->string('profil_risiko')->nullable();
            $table->integer('pertanyaan_id')->nullable();
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
        Schema::dropIfExists('opini_cad_details');
    }
}
