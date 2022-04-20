<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is user_info
        Schema::create('tbl_users_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('division_code', 100)->nullable();
            $table->string('lname', 100)->nullable();
            $table->string('fname', 100)->nullable();
            $table->string('mname', 100)->nullable();
            $table->string('name_extension', 10)->nullable();
            $table->string('birth_date', 50)->nullable();
            $table->string('place_birth', 200)->nullable();
            $table->string('citizenship', 200)->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('civil_status', 100)->nullable();
            $table->string('height', 10)->nullable();
            $table->string('weight', 10)->nullable();
            $table->string('blood_type', 10)->nullable();
            $table->string('gsis_no', 50)->nullable();
            $table->string('pag_ibig_no', 50)->nullable();
            $table->string('philhealth_no', 50)->nullable();
            $table->string('sss_no', 50)->nullable();
            $table->string('tin_no', 50)->nullable();
            $table->string('agency_employee_no', 50)->nullable();
            $table->string('telephone_no', 50)->nullable();
            $table->string('mobile_no', 50)->nullable();
            $table->string('contact_person_name', 50)->nullable();
            $table->string('contact_person_address', 50)->nullable();
            $table->string('contact_person_number', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users_info');
    }
}
