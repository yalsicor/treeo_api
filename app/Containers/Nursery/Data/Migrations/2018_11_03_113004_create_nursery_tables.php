<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNurseryTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('nurseries', function(Blueprint $table) {
            $table->increments('id');
            $table->string('owner');
            $table->unsignedInteger('point_id')->nullable();
            $table->foreign('point_id')
                ->references('id')->on('geo_points')
                ->onDelete('set null');
            $table->unsignedInteger('cover_id')->nullable();
            $table->foreign('cover_id')
                ->references('id')->on('media')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('nurseries', function(Blueprint $table) {
            $table->dropForeign(['point_id']);
            $table->dropForeign(['cover_id']);
        });
        Schema::dropIfExists('nurseries');
    }
}
