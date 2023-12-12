<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBagianMasterPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('master_pertanyaan', function (Blueprint $table) {
            $table->string('bagian', 200)->nullable();
            $table->string('sub_bagian', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maaster_pertanyaan', function (Blueprint $table) {
            //
        });
    }
}
