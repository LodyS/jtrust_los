<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoLembarKeputusanKreditLoanApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loan_applicants', function (Blueprint $table) {
            $table->string('no_lembar_keputusan_kredit')->nullable();
            $table->date('tanggal_lkk')->nullable();
            $table->date('tanggal_nak')->nullable();
            $table->text('catatan_lkk')->nullable();
            $table->string('provisi',20)->nullable();
            $table->string('biaya_administrasi', 50)->nullable();
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
