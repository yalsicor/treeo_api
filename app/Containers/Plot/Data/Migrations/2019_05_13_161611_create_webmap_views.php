<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

/**
 * Class CreateWebmapViews
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateWebmapViews extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW webmap_plot_view AS
                SELECT
                    p.id
                    , p.identifier AS mu_id
                    , gp.point AS point_geo
                    , f.identifier AS smallholder
                    , p.farmer_name AS sh_name
                    , fm.file AS photo
                    , p.video_url AS videourl
                    , f.story
                    , p.latest_survey_date AS date
                    , p.planting_date AS plantingdate
                    , p.species AS speciesmix
                    , p.latest_survey_dbh_mean AS mittelwertvondbh_cm_r
                    , p.latest_survey_height_mean AS mittelwertvonheight_m_r
                    , p.area_m2 AS st_area_r
                    , p.latest_survey_treecount AS treecount
                    , p.supporter AS name
                    , s.path
                    , supporter_logo.file AS logofile
                    , p.sample
                FROM
                    plots_view p
                LEFT JOIN farmers f ON p.farmer_id = f.identifier
                LEFT JOIN media fm ON f.photo_id = fm.id
                LEFT JOIN supporters s ON p.supporter_id = s.id
                LEFT JOIN media supporter_logo ON s.logo_id = supporter_logo.id
                LEFT JOIN geo_points gp ON p.point_id = gp.id
                WHERE
                    p.active =TRUE AND p.project IN ('ID 1mt', 'ID FSF', 'ID Research fields')
            ;
        ");
        DB::statement("
            CREATE OR REPLACE VIEW webmap_polygon_view AS
                SELECT
                    p.identifier AS mu_id
                    , gp.polygon AS polygon_geo
                FROM
                    plots p
                LEFT JOIN farmers f on p.farmer_id = f.id
                LEFT JOIN projects p2 on f.project_id = p2.id
                LEFT JOIN geo_polygons gp on p.polygon_id = gp.id
                WHERE
                    p.active = TRUE AND p2.name IN ('ID 1mt', 'ID FSF', 'ID Research fields')
            ;
        ");

        DB::statement("
            GRANT SELECT ON webmap_plot_view TO analytics;
        ");

        DB::statement("
            GRANT SELECT ON webmap_polygon_view TO analytics;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("DROP VIEW webmap_plot_view;");
        DB::statement("DROP VIEW webmap_polygon_view;");
    }
}
