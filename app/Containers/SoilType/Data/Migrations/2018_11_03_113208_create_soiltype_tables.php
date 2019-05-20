<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoiltypeTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('soil_types', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('soil_types');
    }
}
