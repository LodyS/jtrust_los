<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSettingFlowStatusReturnLegalDll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setting_flows', function (Blueprint $table) {
            $table->string('status_legal_opini')->nullable()->default('No');
            $table->string('status_compliance_opini')->nullable()->default('No');
            $table->string('status_cad_opini')->nullable()->default('No');
            $table->string('status_worksheet_screening')->nullable()->default('No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting_flows', function (Blueprint $table) {
            //
        });
    }
}
