<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class ChangeAreaNumberDimension
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ChangeAreaNumberDimension extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('geo_polygons', function (Blueprint $table) {

            $table->decimal('area_m2', 15, 3)->nullable()->change();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('');
    }
}
