<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCharacterReferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // model to use is character_references_model
         Schema::create('tbl_character_references', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->string('name', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('tel_no', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tbl_character_references');
    }
}
