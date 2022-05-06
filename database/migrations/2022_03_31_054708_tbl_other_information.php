<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblOtherInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is other_information_model
         Schema::create('tbl_other_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('skills_hobbies', 255)->nullable();
            $table->string('recognition', 255)->nullable();
            $table->string('membership_organization', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tbl_other_information');
    }
}
