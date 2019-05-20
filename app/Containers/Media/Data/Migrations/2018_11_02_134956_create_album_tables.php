<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlbumTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('imageables', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('imageable_id')->unsigned()->nullable();
            $table->string('imageable_type')->nullable();
            $table->integer('media_id')->unsigned()->nullable();

            $table->text('caption')->nullable();
            $table->integer('order')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('media_id')
                ->references('id')->on('media')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('imageables', function (Blueprint $table) {
            $table->dropForeign(['media_id']);
        });
        Schema::drop('imageables');
    }
}
