<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFasilitasKreditKolRiwayatPinjamanGrupUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('riwayat_pinjaman_grup_usaha', function (Blueprint $table) {
            $table->string('fasilitas')->nullable();
            $table->string('kol')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riwayat_pinjaman_grup_usaha', function (Blueprint $table) {
            //
        });
    }
}
