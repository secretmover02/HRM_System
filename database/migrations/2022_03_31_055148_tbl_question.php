<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is question_model
         Schema::create('tbl_question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('no_34', 10)->nullable();
            $table->string('no_35', 10)->nullable();
            $table->string('no_36', 10)->nullable();
            $table->string('no_37', 10)->nullable();
            $table->string('no_38', 10)->nullable();
            $table->string('no_39', 10)->nullable();
            $table->string('no_40', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tbl_question');
    }
}
