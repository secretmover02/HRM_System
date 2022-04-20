<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblVoluntaryWorkIvolvement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is voluntary_work_involvement_model
        Schema::create('tbl_voluntary_work_involvement', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('address_organization', 200)->nullable();
            $table->string('name_organization', 200)->nullable();
            $table->string('from', 50)->nullable();
            $table->string('to', 50)->nullable();
            $table->string('number_hours', 50)->nullable();
            $table->string('nature_work', 200)->nullable();
            $table->string('position', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_voluntary_work_involvement');
    }
}
