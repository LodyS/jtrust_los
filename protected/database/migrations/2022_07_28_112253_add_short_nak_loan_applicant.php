<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShortNakLoanApplicant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loan_applicants', function (Blueprint $table) {
            $table->string('no_nak_short',50)->nullable();
            $table->date('tanggal_nak_short')->nullable();
            $table->string('no_surat_debitur', 100)->nullable();
            $table->date('tanggal_kunjungan_terakhir')->nullable();
            $table->date('tanggal_surat_debitur')->nullable();
            $table->date('tanggal_dokumen_lengkap_diterima')->nullable();
            $table->date('tanggal_call_report')->nullable();
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
            //
        });
    }
}
