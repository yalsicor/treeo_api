<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePointTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('geo_points', function (Blueprint $table) {

            $table->increments('id');

            $table->point('point');
            $table->integer('accuracy')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('geo_points');
    }
}
