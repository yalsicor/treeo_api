<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVillageTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('villages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('district_id')->nullable();
            $table->foreign('district_id')
                ->references('id')->on('districts')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('villages', function(Blueprint $table) {
            $table->dropForeign(['district_id']);
        });
        Schema::dropIfExists('villages');
    }
}
