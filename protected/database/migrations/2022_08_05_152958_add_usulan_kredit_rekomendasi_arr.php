<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsulanKreditRekomendasiArr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rekomendasi_arr', function (Blueprint $table) {
            $table->string('jenis_fasilitas_kredit', 50)->nullable();
            $table->string('limit_fasilitas_kredit', 50)->nullable();
            $table->string('sifat_fasilitas_kredit', 50)->nullable();
            $table->string('tujuan_penggunaan',100)->nullable();
            $table->string('jangka_waktu_fasilitas_kredit', 20)->nullable();
            $table->string('jangka_waktu_penarikan_fasilitas_kredit')->nullable();
            $table->string('jangka_waktu_angsuran')->nullable();
            $table->string('suku_bunga')->nullable();
            $table->string('provisi')->nullable();
            $table->string('biaya_administrasi')->nullable();
            $table->string('grace_period')->nullable();
            $table->string('lain_lain')->nullable();
            $table->string('total_fasilitas_kredit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rekomendasi_arr', function (Blueprint $table) {
            //
        });
    }
}
