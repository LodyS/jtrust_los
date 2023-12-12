<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_flows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jabatan_id')->nullable();
            $table->string('level')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('return_legal_opini')->nullable();
            $table->string('return_compliance_opini')->nullable();
            $table->string('return_worksheet_screening')->nullable();
            $table->string('return_cad_opini')->nullable();
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
        Schema::dropIfExists('setting_flows');
    }
}
