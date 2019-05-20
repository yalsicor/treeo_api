<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlantingdistanceTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('planting_distances', function(Blueprint $table) {
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
        Schema::dropIfExists('planting_distances');
    }
}
