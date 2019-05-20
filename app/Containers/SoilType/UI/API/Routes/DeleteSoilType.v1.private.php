<?php

/**
 * @apiGroup           SoilType
 * @apiName            deleteSoilType
 *
 * @api                {DELETE} /v1/soil_type Delete soil type
 * @apiDescription     Delete soil type.
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
$router->delete('soil_type', [
    'as' => 'api_soiltype_delete_soil_type',
    'uses'  => 'Controller@deleteSoilType',
    'middleware' => [
      'auth:api',
    ],
]);
