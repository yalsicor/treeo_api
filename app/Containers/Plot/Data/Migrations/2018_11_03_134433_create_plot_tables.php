<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlotTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('plots', function (Blueprint $table) {

            $table->increments('id');

            $table->unsignedInteger('farmer_id')->nullable();
            $table->foreign('farmer_id')
                ->references('id')->on('farmers')
                ->onDelete('set null');
            $table->unsignedInteger('polygon_id')->nullable();
            $table->foreign('polygon_id')
                ->references('id')->on('geo_polygons')
                ->onDelete('set null');
            $table->unsignedInteger('species_id')->nullable();
            $table->foreign('species_id')
                ->references('id')->on('species')
                ->onDelete('set null');
            $table->unsignedInteger('soil_type_id')->nullable();
            $table->foreign('soil_type_id')
                ->references('id')->on('soil_types')
                ->onDelete('set null');
            $table->unsignedInteger('legal_status_id')->nullable();
            $table->foreign('legal_status_id')
                ->references('id')->on('legal_status')
                ->onDelete('set null');
            $table->unsignedInteger('village_id')->nullable();
            $table->foreign('village_id')
                ->references('id')->on('villages')
                ->onDelete('set null');
            $table->unsignedInteger('point_id')->nullable();
            $table->foreign('point_id')
                ->references('id')->on('geo_points')
                ->onDelete('set null');
            $table->unsignedInteger('planting_distance_id')->nullable();
            $table->foreign('planting_distance_id')
                ->references('id')->on('planting_distances')
                ->onDelete('set null');
            $table->unsignedInteger('supporter_id')->nullable();
            $table->foreign('supporter_id')
                ->references('id')->on('supporters')
                ->onDelete('set null');
            $table->unsignedInteger('nursery_id')->nullable();
            $table->foreign('nursery_id')
                ->references('id')->on('nurseries')
                ->onDelete('set null');
            $table->unsignedInteger('field_coordinator_id')->nullable();
            $table->foreign('field_coordinator_id')
                ->references('id')->on('field_coordinators')
                ->onDelete('set null');

            $table->date('planting_date')->nullable();
            $table->string('video_url')->nullable();
            $table->string('identifier');
            $table->string('neighbors')->nullable();
            $table->string('landscape_features')->nullable();
            $table->string('general_conditions')->nullable();
            $table->string('fire_fighting')->nullable();
            $table->boolean('active')->default(false);
            $table->boolean('sample')->default(false);
            $table->integer('plants_planted')->nullable();
            $table->integer('import_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('plots', function(Blueprint $table) {
            $table->dropForeign(['polygon_id']);
            $table->dropForeign(['species_id']);
            $table->dropForeign(['soil_type_id']);
            $table->dropForeign(['legal_status_id']);
            $table->dropForeign(['village_id']);
            $table->dropForeign(['point_id']);
            $table->dropForeign(['planting_distance_id']);
            $table->dropForeign(['supporter_id']);
            $table->dropForeign(['nursery_id']);
        });
        Schema::dropIfExists('plots');
    }
}
