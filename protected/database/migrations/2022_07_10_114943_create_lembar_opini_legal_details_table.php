<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembarOpiniLegalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembar_opini_legal_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('legal_opini_id')->nullable();
            $table->text('catatan_rekomendasi_mitigasi')->nullable();
            $table->string('terpenuhi')->nullable();
            $table->string('profil_risiko')->nullable();
            $table->integer('pertanyaan_id')->nullable();
            $table->string('sub_judul')->nullable();
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
        Schema::dropIfExists('lembar_opini_legal_details');
    }
}
