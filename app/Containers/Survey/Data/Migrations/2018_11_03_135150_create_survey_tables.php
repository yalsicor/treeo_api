<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {

            $table->increments('id');

            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->unsignedInteger('plot_id')->nullable();
            $table->foreign('plot_id')
                ->references('id')->on('plots')
                ->onDelete('set null');
            $table->string('notes')->nullable();
            $table->string('identifier');
            $table->string('user_created')->nullable();
            $table->timestamp('date_import')->nullable();
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id')
                ->references('id')->on('survey_status')
                ->onDelete('set null');
            $table->integer('treecount')->nullable();
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
        Schema::table('surveys', function(Blueprint $table) {
            $table->dropForeign(['plot_id']);
            $table->dropForeign(['status_id']);
        });
        Schema::dropIfExists('surveys');
    }
}
