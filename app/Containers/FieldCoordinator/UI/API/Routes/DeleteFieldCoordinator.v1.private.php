<?php

/**
 * @apiGroup           FieldCoordinator
 * @apiName            deleteFieldCoordinator
 *
 * @api                {DELETE} /v1/fieldcoordinators Delete field coordinator
 * @apiDescription     Delete field coordinator.
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
$router->delete('fieldcoordinators', [
    'as' => 'api_fieldcoordinator_delete_field_coordinator',
    'uses'  => 'Controller@deleteFieldCoordinator',
    'middleware' => [
      'auth:api',
    ],
]);
