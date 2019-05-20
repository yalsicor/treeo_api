<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotspotTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hotspots', function (Blueprint $table) {

            $table->increments('id');
            $table->text('description')->nullable();
            $table->unsignedInteger('point_id')->nullable();
            $table->foreign('point_id')
                ->references('id')->on('geo_points')
                ->onDelete('set null');
            $table->unsignedInteger('photo_id')->nullable();
            $table->foreign('photo_id')
                ->references('id')->on('media')
                ->onDelete('set null');
            $table->string('name_de')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_ms')->nullable();
            $table->string('link_de')->nullable();
            $table->string('link_en')->nullable();
            $table->string('link_ms')->nullable();

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('hotspots', function(Blueprint $table) {
            $table->dropForeign(['point_id']);
            $table->dropForeign(['photo_id']);
        });
        Schema::dropIfExists('hotspots');
    }
}
