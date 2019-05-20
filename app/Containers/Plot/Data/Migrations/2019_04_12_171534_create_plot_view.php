<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

/**
 * Class CreatePlotView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreatePlotView extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW plots_view AS
            SELECT
                    p.identifier
                    , p.id
                    , p.polygon_id
                    , p.species_id
                    , p.calculated_polygon
                    , p.soil_type_id
                    , p.legal_status_id
                    , p.village_id
                    , p.point_id
                    , p.planting_distance_id
                    , p.supporter_id
                    , p.nursery_id
                    , p.field_coordinator_id
                    , p.planting_date
                    , p.video_url
                    , p.neighbors
                    , p.landscape_features
                    , p.general_conditions
                    , p.fire_fighting
                    , p.active
                    , p.sample
                    , p.plants_planted
                    , p.import_id
                    , p.created_at
                    , p.updated_at
                    , CONCAT(f.name, ' (', f.identifier, ')') as farmer
                    , f.identifier as farmer_id
                    , f.name as farmer_name
                    , pr.name AS project
                    , geo.area_m2::numeric(20, 0) AS area_m2
                    , s.name AS species
                    , count(s2.id) AS survey_count
                    , latest_survey.treecount AS latest_survey_treecount
                    , latest_survey.date AS latest_survey_date
                    , latest_survey.dbh_mean::NUMERIC(20, 2) AS latest_survey_dbh_mean
                    , latest_survey.height_mean::NUMERIC(20, 2) AS latest_survey_height_mean
                    , CASE WHEN (geo.area_m2 = 0 OR geo.area_m2 ISNULL) THEN 0 ELSE (latest_survey.treecount / (geo.area_m2 / 10000)) END::NUMERIC(20, 0) AS trees_per_ha
                    , latest_survey.tree_volume AS latest_survey_tree_volume
                    , (latest_survey.tree_value)::NUMERIC(20, 0) AS latest_survey_value_ird
                    , (latest_survey.tree_value * conversion_ird_to_usd.value::NUMERIC)::NUMERIC(12,2) AS latest_survey_value_usd
                    , soil_types.name AS soil_type
                    , legal_status.name AS legal_status
                    , villages.name AS village
                    , districts.name AS district
                    , planting_distances.name AS planting_distance
                    , supporters.name AS supporter
                    , nurseries.owner AS nursery
                    , field_coordinators.name AS field_coordinator
            FROM plots p
            LEFT JOIN farmers f
              ON p.farmer_id = f.id
            LEFT JOIN projects pr
              ON f.project_id = pr.id
            LEFT JOIN geo_polygons geo
              ON p.polygon_id = geo.id
            LEFT JOIN species s
              ON p.species_id = s.id
            LEFT JOIN surveys s2
              ON p.id = s2.plot_id
            LEFT JOIN soil_types
              ON p.soil_type_id = soil_types.id
            LEFT JOIN legal_status
              ON p.legal_status_id = legal_status.id
            LEFT JOIN field_coordinators
              ON p.field_coordinator_id = field_coordinators.id
            LEFT JOIN villages
              ON p.village_id = villages.id
            LEFT JOIN districts
              ON villages.district_id = districts.id
            LEFT JOIN planting_distances
              ON p.planting_distance_id = planting_distances.id
            LEFT JOIN supporters
              ON p.supporter_id = supporters.id
            LEFT JOIN nurseries
              ON p.nursery_id = nurseries.id
            LEFT JOIN settings conversion_ird_to_usd
              ON conversion_ird_to_usd.key = 'conversion_ird_to_usd'
            LEFT JOIN (
              SELECT DISTINCT ON (plot_id)
                   surveys.id
                   , surveys.plot_id
                   , surveys.date_end AS date
                   , COALESCE( surveys.treecount, count(t.id)) AS treecount
                   , avg(t.dbh_cm) AS dbh_mean
                   , avg(t.height_m) AS height_mean
                   , CASE WHEN surveys.treecount ISNULL
                       THEN (sum(t.height_m * t.dbh_cm / 100 * settings.value::NUMERIC))
                       ELSE 
                         CASE WHEN count(t.id) = 0
                            THEN 0
                            ELSE (sum(t.height_m * t.dbh_cm / 100 * settings.value::NUMERIC) / count(t.id) * surveys.treecount)
                         END
                     END::NUMERIC(20, 2) AS tree_volume
                   , CASE
                        WHEN surveys.treecount ISNULL
                            THEN sum(t.height_m * t.dbh_cm / 100 * settings.value::NUMERIC *
                                CASE
                                    WHEN t.dbh_cm < 20 THEN idr_per_m3_20.value::NUMERIC
                                    WHEN t.dbh_cm <= 30 THEN idr_per_m3_30.value::NUMERIC
                                    WHEN t.dbh_cm <= 40 THEN idr_per_m3_40.value::NUMERIC
                                    WHEN t.dbh_cm > 40 THEN idr_per_m3_50.value::NUMERIC
                                END )
                            ELSE 
                                CASE WHEN count(t.id) = 0
                                    THEN 0
                                    ELSE 
                                        sum(t.height_m * t.dbh_cm / 100 * settings.value::NUMERIC *
                                        CASE
                                            WHEN t.dbh_cm::NUMERIC(20, 2) < 20 THEN idr_per_m3_20.value::NUMERIC
                                            WHEN t.dbh_cm::NUMERIC(20, 2) <= 30 THEN idr_per_m3_30.value::NUMERIC
                                            WHEN t.dbh_cm::NUMERIC(20, 2) <= 40 THEN idr_per_m3_40.value::NUMERIC
                                            WHEN t.dbh_cm::NUMERIC(20, 2) > 40 THEN idr_per_m3_50.value::NUMERIC
                                        END)
                                        / count(t.id) * surveys.treecount
                                    END
                        END::NUMERIC(20, 2)                     AS tree_value
              FROM surveys
              LEFT JOIN trees t
                ON surveys.id = t.survey_id
              LEFT JOIN settings idr_per_m3_20
                ON idr_per_m3_20.key = 'idr_per_m3_20'
              LEFT JOIN settings idr_per_m3_30
                ON idr_per_m3_30.key = 'idr_per_m3_30'
              LEFT JOIN settings idr_per_m3_40
                ON idr_per_m3_40.key = 'idr_per_m3_40'
              LEFT JOIN settings idr_per_m3_50
                ON idr_per_m3_50.key = 'idr_per_m3_50'
              LEFT JOIN settings
                ON settings.key = 'formfactor'
              GROUP BY surveys.id, idr_per_m3_20.value, idr_per_m3_30.value, idr_per_m3_40.value, idr_per_m3_50.value
              ORDER BY plot_id, surveys.date_end DESC
                ) AS latest_survey
              ON latest_survey.plot_id = p.id
            GROUP BY p.id
                     , f.id
                     , pr.id
                     , geo.id
                     , s.id
                     , latest_survey.id
                     , latest_survey.date
                     , latest_survey.treecount
                     , latest_survey.dbh_mean
                     , latest_survey.height_mean
                     , soil_types.name
                     , legal_status.name
                     , villages.name
                     , districts.name
                     , planting_distances.name
                     , supporters.name
                     , nurseries.owner
                     , latest_survey.tree_volume
                     , latest_survey.tree_value
                     , conversion_ird_to_usd.value
                     , field_coordinators.name
            ORDER BY p.id
            ;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("
            DROP VIEW plots_view;
        ");
    }
}
