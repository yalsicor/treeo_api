<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateSurveyStatusTables
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSurveyStatusTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('survey_status', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('survey_status');
    }
}
