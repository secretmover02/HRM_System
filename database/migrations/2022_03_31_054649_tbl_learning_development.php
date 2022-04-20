<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblLearningDevelopment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is learning_development_model
         Schema::create('tbl_learning_development', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('title', 255)->nullable();
            $table->string('from', 50)->nullable();
            $table->string('to', 50)->nullable();
            $table->string('number_hours', 50)->nullable();
            $table->string('type_ld', 200)->nullable();
            $table->string('conducted_by', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tbl_learning_development');
    }
}
