<?php

/**
 * @apiGroup           FieldCoordinator
 * @apiName            createFieldCoordinator
 *
 * @api                {POST} /v1/fieldcoordinator Create field coordinator
 * @apiDescription     Create field coordinator.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name required|min:3|max:191
 *
 * @apiUse             FieldCoordinatorSuccessSingleResponse
 */

/** @var Route $router */
$router->post('fieldcoordinator', [
    'as' => 'api_fieldcoordinator_create_field_coordinator',
    'uses'  => 'Controller@createFieldCoordinator',
    'middleware' => [
      'auth:api',
    ],
]);
