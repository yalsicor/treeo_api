<?php

/**
 * @apiGroup           Village
 * @apiName            deleteVillage
 *
 * @api                {DELETE} /v1/village Delete village
 * @apiDescription     Delete village.
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
$router->delete('village', [
    'as' => 'api_village_delete_village',
    'uses'  => 'Controller@deleteVillage',
    'middleware' => [
      'auth:api',
    ],
]);
