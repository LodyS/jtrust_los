<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSuratDebiturLoanApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loan_applicants', function (Blueprint $table) {
            $table->string('no_surat',30)->nullable();
            $table->date('tanggal_surat')->nullable();
            $table->date('tanggal_surat_diterima')->nullable();
            $table->text('permohonan_debitur')->nullable();
            $table->text('tujuan_proposal')->nullable();
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
