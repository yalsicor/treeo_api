<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Class CreateTreeView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateTreeView extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW trees_view AS
            SELECT
                t.identifier
                , t.id
                , t.species_id
                , surveys.identifier AS survey_id
                , plots.identifier AS plot_id
                , farmers.identifier AS farmer_id
                , farmers.name AS farmer_name
                , projects.name AS project_name
                , t.dbh_cm
                , t.height_m
                , (t.height_m * pi() * power(t.dbh_cm / 200, 2) * settings.value::NUMERIC)::NUMERIC(20, 2) AS tree_volume
                , t.height_calculated
                , t.health
                , t.comment
                , t.point_id
                , t.timestamp
                , t.image_id
                , t.import_id
                , t.created_at
                , t.updated_at
                , m.file AS image
                , s.name AS species
                , t.height_m * t.dbh_cm / 100 * settings.value::NUMERIC AS volume
                , (CASE WHEN (point.point IS NULL) THEN NULL ELSE CONCAT(ST_X(point.point::geometry)::numeric(9,6), ', ', ST_Y(point.point::geometry)::numeric(9,6)) END) AS point_coords
                , point.accuracy
            FROM trees t
            LEFT JOIN media m 
                ON t.image_id = m.id
            LEFT JOIN species s 
                ON t.species_id = s.id
            LEFT JOIN settings
                ON settings.key = 'formfactor'
            LEFT JOIN surveys
                ON t.survey_id = surveys.id
            LEFT JOIN plots 
                ON surveys.plot_id = plots.id
            LEFT JOIN farmers
                ON plots.farmer_id = farmers.id
            LEFT JOIN projects
                ON farmers.project_id = projects.id
            LEFT JOIN geo_points point
                ON t.point_id = point.id
            ORDER BY t.id
            ;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("
            DROP VIEW trees_view;
        ");
    }
}
