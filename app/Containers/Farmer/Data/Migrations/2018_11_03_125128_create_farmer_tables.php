<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFarmerTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();
        });

        Schema::create('farmers', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');
            $table->string('identifier');
            $table->text('story')->nullable();
            $table->integer('children')->nullable();
            $table->date('birthday')->nullable();
            $table->unsignedInteger('photo_id')->nullable();
            $table->string('main_occupation')->nullable();
            $table->string('side_occupation')->nullable();
            $table->string('spouse_name')->nullable();
            $table->date('spouse_birthday')->nullable();
            $table->string('spouse_main_occupation')->nullable();
            $table->string('spouse_side_occupation')->nullable();
            $table->integer('family_income_idr')->nullable();
            $table->text('address')->nullable();
            $table->integer('import_id')->nullable();

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->unsignedInteger('gender_id')->nullable();
            $table->foreign('gender_id')
                ->references('id')->on('genders')
                ->onDelete('set null');
            $table->unsignedInteger('project_id')->nullable();
            $table->foreign('project_id')
                ->references('id')->on('projects')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
        Schema::dropIfExists('genders');
    }
}
