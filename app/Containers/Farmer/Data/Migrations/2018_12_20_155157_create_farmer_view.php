<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

/**
 * Class CreateFarmerView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateFarmerView extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW farmers_view AS
            SELECT
                f.identifier
                , f.id
                , f.name
                , f.story
                , f.children
                , f.birthday
                , f.photo_id
                , f.main_occupation
                , f.side_occupation
                , f.spouse_name
                , f.spouse_birthday
                , f.spouse_main_occupation
                , f.spouse_side_occupation
                , f.family_income_idr
                , f.address
                , f.import_id
                , f.user_id
                , f.gender_id
                , f.project_id
                , f.created_at
                , f.updated_at
                , g.name AS gender
                , u.email
                , p.name AS project
                , m.file AS photo
            FROM farmers f
            LEFT JOIN genders g ON f.gender_id = g.id
            LEFT JOIN users u ON f.user_id = u.id
            LEFT JOIN projects p ON f.project_id = p.id
            LEFT JOIN media m ON f.photo_id = m.id
            ;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("
            DROP VIEW farmers_view;
        ");
    }
}
