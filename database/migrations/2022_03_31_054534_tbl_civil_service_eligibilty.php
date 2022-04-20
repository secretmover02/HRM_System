<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCivilServiceEligibilty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is civil_service_model
        Schema::create('tbl_civil_service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('license_title', 200)->nullable();
            $table->string('rating', 50)->nullable();
            $table->string('date_examination', 100)->nullable();
            $table->string('place_examination', 200)->nullable();
            $table->string('license_number', 100)->nullable();
            $table->string('date_validity', 100)->nullable();
            $table->string('type', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_civil_service');
    }
}
