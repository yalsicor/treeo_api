<?php

/**
 * @apiGroup           PlantingDistance
 * @apiName            updatePlantingDistance
 *
 * @api                {PATCH} /v1/planting_distance Update planting distance
 * @apiDescription     Update planting distance.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
 *
 * @apiUse             PlantingDistanceSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('planting_distance', [
    'as' => 'api_plantingdistance_update_planting_distance',
    'uses'  => 'Controller@updatePlantingDistance',
    'middleware' => [
      'auth:api',
    ],
]);
