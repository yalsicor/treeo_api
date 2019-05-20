<?php

/**
 * @apiGroup           PlantingDistance
 * @apiName            createPlantingDistance
 *
 * @api                {POST} /v1/planting_distance Create planting distance
 * @apiDescription     Create planting distance.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name
 *
 * @apiUse             PlantingDistanceSuccessSingleResponse
 */

/** @var Route $router */
$router->post('planting_distance', [
    'as' => 'api_plantingdistance_create_planting_distance',
    'uses'  => 'Controller@createPlantingDistance',
    'middleware' => [
      'auth:api',
    ],
]);
