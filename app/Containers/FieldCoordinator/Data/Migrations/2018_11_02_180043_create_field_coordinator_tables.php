<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateFieldCoordinatorTables
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateFieldCoordinatorTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('field_coordinators', function (Blueprint $table) {

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
        Schema::dropIfExists('field_coordinators');
    }
}
