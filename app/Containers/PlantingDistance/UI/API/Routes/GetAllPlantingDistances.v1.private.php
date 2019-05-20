<?php

/**
 * @apiGroup           PlantingDistance
 * @apiName            getAllPlantingDistances
 *
 * @api                {GET} /v1/planting_distances Get all planting distances
 * @apiDescription     Get all planting distances.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiUse             PlantingDistanceSuccessSingleResponse
 */

/** @var Route $router */
$router->get('planting_distances', [
    'as' => 'api_plantingdistance_get_all_planting_distances',
    'uses'  => 'Controller@getAllPlantingDistances',
    'middleware' => [
      'auth:api',
    ],
]);
