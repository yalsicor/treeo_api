<?php

/**
 * @apiGroup           Plot
 * @apiName            getPlotMap
 *
 * @api                {GET} /v1/plot/map Get plot map
 * @apiDescription     Get plot map.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required project identifier
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "type": "FeatureCollection",
    "features": [
        {
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
                "id": "c3bu"
            },
            "id": "c3bu"
        }
    ]
}
 */

/** @var Route $router */
$router->get('plot/map', [
    'as' => 'api_plot_get_plot_map',
    'uses'  => 'Controller@getPlotMap',
    'middleware' => [
      'auth:api',
    ],
]);
