<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateDebugTables
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateDebugTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('debugs', function (Blueprint $table) {

            $table->increments('id');

            $table->timestamp('timestamp')->nullable();
            $table->text('data')->nullable();

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('debugs');
    }
}
