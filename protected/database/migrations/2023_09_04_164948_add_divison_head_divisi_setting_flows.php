<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDivisonHeadDivisiSettingFlows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setting_flows', function (Blueprint $table) {
            $table->string('status_division_head')->nullable()->default('No');
            $table->string('divisi')->nullable();
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
