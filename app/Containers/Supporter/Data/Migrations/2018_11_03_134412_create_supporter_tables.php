<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupporterTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('supporters', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('logo_id')->nullable();
            $table->foreign('logo_id')
                ->references('id')->on('media')
                ->onDelete('set null');
            $table->string('path')->nullable();

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('supporters', function(Blueprint $table) {
            $table->dropForeign(['logo_id']);
        });
        Schema::dropIfExists('supporters');
    }
}
