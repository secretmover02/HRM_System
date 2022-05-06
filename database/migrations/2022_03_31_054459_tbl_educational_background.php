<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblEducationalBackground extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is education_background_model
        Schema::create('tbl_educational_background', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('level', 100)->nullable();
            $table->string('school_name', 200)->nullable();
            $table->string('course_education', 200)->nullable();
            $table->string('from', 50)->nullable();
            $table->string('to', 50)->nullable();
            $table->string('unit_earned', 10)->nullable();
            $table->string('year_graduated', 15)->nullable();
            $table->string('academic_honor_received', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_educational_background');
    }
}
