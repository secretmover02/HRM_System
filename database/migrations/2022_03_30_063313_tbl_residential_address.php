<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblResidentialAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is tbl_address
        Schema::create('tbl_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('house_no', 100)->nullable();
            $table->string('street', 100)->nullable();
            $table->string('subdivision', 100)->nullable();
            $table->string('brgy', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('zipcode', 100)->nullable();
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
        Schema::dropIfExists('tbl_address');
    }
}
