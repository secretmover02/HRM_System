<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblChildren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is children_model
        Schema::create('tbl_children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('child_name', 200)->nullable();
            $table->string('child_birth_date', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_children');
    }
}
