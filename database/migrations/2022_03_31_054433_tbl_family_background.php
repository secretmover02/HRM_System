<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblFamilyBackground extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is family_background_model
        Schema::create('tbl_family_background', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('spouse_lname', 100)->nullable();
            $table->string('spouse_fname', 100)->nullable();
            $table->string('spouse_mname', 100)->nullable();
            $table->string('spouse_extension', 10)->nullable();
            $table->string('occupation', 100)->nullable();
            $table->string('business_name', 100)->nullable();
            $table->string('business_address', 100)->nullable();
            $table->string('telephone_no', 100)->nullable();
            $table->string('father_lname', 100)->nullable();
            $table->string('father_fname', 100)->nullable();
            $table->string('father_mname', 100)->nullable();
            $table->string('father_extension', 10)->nullable();
            $table->string('mother_maiden_name', 100)->nullable();
            $table->string('mother_lname', 100)->nullable();
            $table->string('mother_fname', 100)->nullable();
            $table->string('mother_mname', 100)->nullable();
            $table->string('mother_extension', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_family_background');
    }
}
