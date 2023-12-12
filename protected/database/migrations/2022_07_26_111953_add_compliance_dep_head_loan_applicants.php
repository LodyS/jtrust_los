<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddComplianceDepHeadLoanApplicants extends Migration
{
    public function up()
    {
        Schema::table('loan_applicants', function (Blueprint $table) {
            $table->string('compliance_departemen_head',30)->nullable();
            $table->string('crrd_deputy_division_head', 30)->nullable();
            $table->string('crrd_division_head', 30)->nullable();
            $table->string('cad_division_head', 30)->nullable();
            $table->string('legal_division_head', 30)->nullable();
            $table->string('compliance_division_head', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::table('loan_applicants', function (Blueprint $table) {
            //
        });
    }
}
