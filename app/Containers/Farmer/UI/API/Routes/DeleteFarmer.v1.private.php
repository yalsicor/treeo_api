<?php

/**
 * @apiGroup           Farmer
 * @apiName            deleteFarmer
 *
 * @api                {DELETE} /v1/farmer Delete farmer
 * @apiDescription     Delete a farmer.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('farmer', [
    'as' => 'api_farmer_delete_farmer',
    'uses'  => 'Controller@deleteFarmer',
    'middleware' => [
      'auth:api',
    ],
]);
