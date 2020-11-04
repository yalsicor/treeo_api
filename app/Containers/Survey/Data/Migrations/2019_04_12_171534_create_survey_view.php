<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Class CreatePlotView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSurveyView extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW surveys_view AS
            SELECT
                survey.id
                , survey.identifier
                , survey.date_start
                , survey.date_end
                , survey.plot_identifier AS plot_id
                , survey.farmer_id
                , survey.farmer_name
                , survey.project_name
                , survey.notes
                , survey.status_id
                , survey.created_at
                , survey.updated_at
                , survey.treecount
                , survey.dbh_mean
                , survey.height_mean
                , survey.tree_volume
                , survey.tree_value AS value_ird
                , (survey.tree_value * conversion_ird_to_usd.value::NUMERIC)::NUMERIC(12,2) AS value_usd
                , CASE WHEN (geo.area_m2 = 0 OR geo.area_m2 ISNULL) THEN 0 ELSE (treecount / (geo.area_m2 / 10000)) END::NUMERIC(20, 0) AS trees_per_ha
            FROM (
                   SELECT
                        s.identifier
                        , s.id
                        , s.date_start
                        , s.date_end
                        , s.plot_id
                        , farmers.identifier AS farmer_id
                        , farmers.name AS farmer_name
                        , projects.name AS project_name
                        , plots.identifier AS plot_identifier
                        , s.notes
                        , s.status_id
                        , s.created_at
                        , s.updated_at
                        , COALESCE(s.treecount, count(t.id)) AS treecount
                        , avg(t.dbh_cm)::NUMERIC(20, 2)      AS dbh_mean
                        , avg(t.height_m)::NUMERIC(20, 2)    AS height_mean
                        , CASE
                            WHEN s.treecount ISNULL THEN sum(t.height_m * pi() * power(t.dbh_cm / 200, 2) * formfactor.value::NUMERIC)
                            ELSE 
                                CASE WHEN count(t.id) = 0
                                    THEN 0
                                    ELSE sum(t.height_m * pi() * power(t.dbh_cm / 200, 2) * formfactor.value::NUMERIC) / count(t.id) * s.treecount
                                END
                            END::NUMERIC(20, 2)                     AS tree_volume
                        , CASE
                            WHEN s.treecount ISNULL 
                                THEN sum(t.height_m * pi() * power(t.dbh_cm / 200, 2) * formfactor.value::NUMERIC * 
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
                                            sum(t.height_m * pi() * power(t.dbh_cm / 200, 2) * formfactor.value::NUMERIC *
                                            CASE
                                                WHEN t.dbh_cm::NUMERIC(20, 2) < 20 THEN idr_per_m3_20.value::NUMERIC
                                                WHEN t.dbh_cm::NUMERIC(20, 2) <= 30 THEN idr_per_m3_30.value::NUMERIC
                                                WHEN t.dbh_cm::NUMERIC(20, 2) <= 40 THEN idr_per_m3_40.value::NUMERIC
                                                WHEN t.dbh_cm::NUMERIC(20, 2) > 40 THEN idr_per_m3_50.value::NUMERIC
                                            END)
                                        / count(t.id) * s.treecount
                                    END
                            END::NUMERIC(20, 2)                     AS tree_value
                   FROM surveys s
                        LEFT JOIN settings idr_per_m3_20
                            ON idr_per_m3_20.key = 'idr_per_m3_20'
                        LEFT JOIN settings idr_per_m3_30
                            ON idr_per_m3_30.key = 'idr_per_m3_30'
                        LEFT JOIN settings idr_per_m3_40
                            ON idr_per_m3_40.key = 'idr_per_m3_40'
                        LEFT JOIN settings idr_per_m3_50
                            ON idr_per_m3_50.key = 'idr_per_m3_50'
                        LEFT JOIN trees t
                            ON s.id = t.survey_id
                        LEFT JOIN plots
                            ON plots.id = s.plot_id
                        LEFT JOIN farmers
                            ON plots.farmer_id = farmers.id
                        LEFT JOIN projects
                            ON farmers.project_id = projects.id
                        LEFT JOIN settings formfactor
                            ON formfactor.key = 'formfactor'
                   GROUP BY s.id, plots.identifier, farmers.identifier, farmers.name, projects.name, idr_per_m3_20.value, idr_per_m3_30.value, idr_per_m3_40.value, idr_per_m3_50.value
                   ORDER BY s.id
                 ) survey
            LEFT JOIN settings conversion_ird_to_usd
              ON conversion_ird_to_usd.key = 'conversion_ird_to_usd'
            LEFT JOIN plots
              ON plots.id = plot_id
            LEFT JOIN geo_polygons geo
              ON plots.polygon_id = geo.id
            ORDER BY survey.id
            ;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("
            DROP VIEW surveys_view;
        ");
    }
}
