<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpeciesTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('species', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('latin_name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('species');
    }
}
