<?php

/**
 * @apiGroup           Plot
 * @apiName            getPlotsForMap
 *
 * @api                {GET} /v1/plots/map get plots as geojson for map
 * @apiDescription     get plots as geojson for map.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "type": "FeatureCollection",
    "features": [
        {
            "id": "67ch",
            "type": "Feature",
            "geometry": {
            "type": "MultiPolygon",
                "coordinates": [
                [
                    [
                        [
                            113.296398,
                            -1.120945
                        ],
                        [
                            113.297457,
                            -1.121112
                        ],
                        [
                            113.2974,
                            -1.121653
                        ],
                        [
                            113.296778,
                            -1.12168
                        ],
                        [
                            113.296398,
                            -1.120945
                        ]
                    ]
                ]
            ]
            },
            "properties": {
            "id": "67ch",
                "type": "plot",
                "active": true,
                "farmer": "j0vi jonedi1",
                "area_m2": 600.18,
                "species": "Sengon",
                "soil_type": "Cambisol",
                "updated_at": "2018-12-19T14:17:44",
                "legal_status": null,
                "survey_count": 2,
                "trees_per_ha": 5315.07214502315971875104,
                "planting_date": "2015-01-01",
                "plants_planted": null,
                "planting_distance": "3x3",
                "latest_survey_dbh_mean": 14.1064516129032258,
                "latest_survey_treecount": 319,
                "latest_survey_value_ird": 287631919.12,
                "latest_survey_value_usd": 19810.65,
                "latest_survey_height_mean": 12.9009677419354839,
                "latest_survey_tree_volume": 479.386531870967741935453
            }
        }
    ]
}
 */

/** @var Route $router */
$router->get('plots/map', [
    'as' => 'api_plot_get_plots_for_map',
    'uses'  => 'Controller@getPlotsForMap',
    'middleware' => [
      'auth:api',
    ],
]);
