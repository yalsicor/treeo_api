<?php

/**
 * @apiGroup           Survey
 * @apiName            getSurveyMap
 *
 * @api                {GET} /v1/survey/map Get survey map
 * @apiDescription     Get survey map.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required survey identifier
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "type": "FeatureCollection",
    "features": [
        {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                    "coordinates": [
                    113.296497,
                    -1.120923
                ]
            },
            "properties": {
                "id": "llfpnu"
            },
            "id": "llfpnu"
        },
        {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                    "coordinates": [
                    113.296645,
                    -1.120987
                ]
            },
            "properties": {
                "id": "tjxotk"
            },
            "id": "tjxotk"
        }
    ]
}
 */

/** @var Route $router */
$router->get('survey/map', [
    'as' => 'api_survey_get_survey_map',
    'uses'  => 'Controller@getSurveyMap',
    'middleware' => [
      'auth:api',
    ],
]);
