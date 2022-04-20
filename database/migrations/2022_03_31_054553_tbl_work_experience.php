<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblWorkExperience extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is work_experience_model
         Schema::create('tbl_work_experience', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('from', 50)->nullable();
            $table->string('to', 50)->nullable();
            $table->string('position_title', 200)->nullable();
            $table->string('company', 200)->nullable();
            $table->string('monthly_salary', 50)->nullable();
            $table->string('salary_grade', 10)->nullable();
            $table->string('salary_step', 10)->nullable();
            $table->string('status_appointment', 50)->nullable();
            $table->string('govt_services', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tbl_work_experience');
    }
}
