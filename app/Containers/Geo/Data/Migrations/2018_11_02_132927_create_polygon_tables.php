<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolygonTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('geo_polygons', function (Blueprint $table) {

            $table->increments('id');

            $table->multiPolygon('polygon');
            $table->decimal('area_m2', 10, 3)->nullable();

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('geo_polygons');
    }
}
