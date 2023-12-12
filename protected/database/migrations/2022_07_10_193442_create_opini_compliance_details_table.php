<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpiniComplianceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opini_compliance_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('opini_compliance_id')->nullable();
            $table->integer('pertanyaan_id')->nullable();
            $table->longText('catatan_rekomendasi_mitigasi')->nullable();
            $table->string('identifikasi')->nullable();
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
        Schema::dropIfExists('opini_compliance_details');
    }
}
