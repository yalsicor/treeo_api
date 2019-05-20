<?php

/**
 * @apiGroup           Geo
 * @apiName            parseGeoJson
 *
 * @api                {POST} /v1/geojson/parse Parse geojson
 * @apiDescription     Parse geojson.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {File}  geojson geojson file
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "geodata": {
        "type": "FeatureCollection",
        "features": [
            {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        13.790347652740206,
                        51.081516396453026
                    ]
                }
            },
            {
                "type": "Feature",
                "geometry": {
                    "type": "MultiPolygon",
                    "coordinates": [
                        [
                            [
                                [
                                    13.789419416468263,
                                    51.0816875011824
                                ],
                                [
                                    13.78947263743495,
                                    51.08178780318552
                                ],
                                [
                                    13.789712131785045,
                                    51.08183795410554
                                ],
                                [
                                    13.790031457585176,
                                    51.081821237138236
                                ],
                                [
                                    13.790430614835334,
                                    51.08175436920865
                                ],
                                [
                                    13.790829772085496,
                                    51.081854671066786
                                ],
                                [
                                    13.79144181320241,
                                    51.0818045201649
                                ],
                                [
                                    13.791601476102473,
                                    51.0816206330595
                                ],
                                [
                                    13.791601476102473,
                                    51.08135315960139
                                ],
                                [
                                    13.791415202719064,
                                    51.08115255349295
                                ],
                                [
                                    13.791042655952248,
                                    51.08113583627799
                                ],
                                [
                                    13.790643498702089,
                                    51.08126957382859
                                ],
                                [
                                    13.79019112048524,
                                    51.08120270510161
                                ],
                                [
                                    13.7899250156518,
                                    51.081169270701885
                                ],
                                [
                                    13.78947263743495,
                                    51.08121942229242
                                ],
                                [
                                    13.789259753568198,
                                    51.0814200281109
                                ],
                                [
                                    13.789419416468263,
                                    51.0816875011824
                                ]
                            ]
                        ]
                    ]
                }
            }
        ]
    },
    "properties": {
        "id": 1,
        "nichts": "2"
    }
}
 */

/** @var Route $router */
$router->post('geojson/parse', [
    'as' => 'api_geo_parse_geo_json',
    'uses'  => 'Controller@parseGeoJson',
    'middleware' => [
      'auth:api',
    ],
]);
