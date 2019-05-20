<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreeTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {

            $table->increments('id');

            $table->unsignedInteger('survey_id')->nullable();
            $table->foreign('survey_id')
                ->references('id')->on('surveys')
                ->onDelete('set null');
            $table->unsignedInteger('species_id')->nullable();
            $table->foreign('species_id')
                ->references('id')->on('species')
                ->onDelete('set null');
            $table->decimal('dbh_cm')->nullable();
            $table->decimal('height_m')->nullable();
            $table->integer('health')->nullable();
            $table->string('comment')->nullable();
            $table->string('identifier');
            $table->unsignedInteger('point_id')->nullable();
            $table->foreign('point_id')
                ->references('id')->on('geo_points')
                ->onDelete('set null');
            $table->timestamp('timestamp')->nullable();
            $table->unsignedInteger('image_id')->nullable();
            $table->foreign('image_id')
                ->references('id')->on('media')
                ->onDelete('set null');
            $table->integer('import_id')->nullable();

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('trees', function(Blueprint $table) {
            $table->dropForeign(['survey_id']);
            $table->dropForeign(['species_id']);
            $table->dropForeign(['point_id']);
            $table->dropForeign(['image_id']);
        });
        Schema::dropIfExists('trees');
    }
}
