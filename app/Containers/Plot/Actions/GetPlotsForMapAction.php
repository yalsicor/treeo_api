<?php

namespace App\Containers\Plot\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class GetPlotsForMapAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetPlotsForMapAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return DB::select("
                SELECT json_build_object(
                    'type', 'FeatureCollection',
                    'features', jsonb_agg(feature)
                ) AS data
                FROM (
                    SELECT json_build_object(
                        'type', 'Feature',
                        'id', id,
                        'geometry', ST_AsGeoJson(polygon)::jsonb,
                        'properties', to_jsonb(row) - 'polygon'
                    ) AS feature
                    FROM (
                        SELECT
                            'plot' AS type
                            , p.identifier AS id
                            , p.farmer
                            , p.farmer_id
                            , p.farmer_name
                            , g.area_m2
                            , p.species
                            , p.survey_count
                            , p.latest_survey_treecount
                            , p.latest_survey_dbh_mean
                            , p.latest_survey_height_mean
                            , p.latest_survey_tree_volume
                            , p.latest_survey_value_ird
                            , p.latest_survey_value_usd
                            , p.trees_per_ha
                            , p.soil_type
                            , p.legal_status
                            , p.planting_distance
                            , p.planting_date
                            , p.active
                            , p.plants_planted
                            , p.updated_at
                            , g.polygon AS polygon
                        FROM plots_view p

                        JOIN geo_polygons g ON p.polygon_id = g.id
                    ) row
                ) features;
            ");
    }
}
