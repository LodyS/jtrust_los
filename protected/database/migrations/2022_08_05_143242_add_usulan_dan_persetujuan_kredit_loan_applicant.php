<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsulanDanPersetujuanKreditLoanApplicant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loan_applicants', function (Blueprint $table) {
            $table->string('jenis_fasilitas_kredit', 50)->nullable();
            $table->string('limit_fasilitas_kredit', 50)->nullable();
            $table->string('sifat_fasilitas_kredit', 50)->nullable();
            $table->string('tujuan_penggunaan',100)->nullable();
            $table->string('jangka_waktu_fasilitas_kredit', 20)->nullable();
            $table->string('jangka_waktu_penarikan_fasilitas_kredit')->nullable();
            $table->string('grace_period', 30)->nullable();
            $table->string('lain_lain', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loan_applicants', function (Blueprint $table) {

        });
    }
}
