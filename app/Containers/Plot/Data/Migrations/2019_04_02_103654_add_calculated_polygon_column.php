<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class AddCalculatedPolygonColumn
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class AddCalculatedPolygonColumn extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('plots', function (Blueprint $table) {

            $table->boolean('calculated_polygon')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('plots', function (Blueprint $table) {

            $table->dropColumn('calculated_polygon');

        });
    }
}
