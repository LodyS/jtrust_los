<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_komponen')->nullable()->unsigned();
            $table->string('uniq_code')->nullable();
            $table->text('pertanyaan')->nullable();
            $table->string('labeling_hasil_jawaban')->nullable();
            $table->string('tipe_pertanyaan')->nullable();
            $table->string('rupiah_format')->nullable();
            $table->string('id_applicant_collection')->nullable();
            $table->string('formula')->nullable();
            $table->string('jenis_formula')->nullable();
            $table->string('tipe_inputan')->nullable();
            $table->string('publish')->default(1);
            $table->integer('sort_number')->nullable();
            $table->integer('modified_by')->nullable();
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
        Schema::dropIfExists('component_detail');
    }
}
