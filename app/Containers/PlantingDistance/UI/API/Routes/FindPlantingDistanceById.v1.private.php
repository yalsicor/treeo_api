<?php

/**
 * @apiGroup           PlantingDistance
 * @apiName            findPlantingDistanceById
 *
 * @api                {GET} /v1/planting_distance Find planting_distance
 * @apiDescription     Find planting distance.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             PlantingDistanceSuccessSingleResponse
 */

/** @var Route $router */
$router->get('planting_distance', [
    'as' => 'api_plantingdistance_find_planting_distance_by_id',
    'uses'  => 'Controller@findPlantingDistanceById',
    'middleware' => [
      'auth:api',
    ],
]);
