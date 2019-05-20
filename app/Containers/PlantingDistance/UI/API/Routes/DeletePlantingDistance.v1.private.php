<?php

/**
 * @apiGroup           PlantingDistance
 * @apiName            deletePlantingDistance
 *
 * @api                {DELETE} /v1/planting_distance Delete planting distance
 * @apiDescription     Delete planting distance.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('planting_distance', [
    'as' => 'api_plantingdistance_delete_planting_distance',
    'uses'  => 'Controller@deletePlantingDistance',
    'middleware' => [
      'auth:api',
    ],
]);
