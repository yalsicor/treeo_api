<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class AddHeightCalculatedColumn
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class AddHeightCalculatedColumn extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('trees', function (Blueprint $table) {

            $table->boolean('height_calculated')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('trees', function (Blueprint $table) {

            $table->dropColumn(['height_calculated']);

        });
    }
}
