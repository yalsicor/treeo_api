<?php

/**
 * @apiGroup           FieldCoordinator
 * @apiName            updateFieldCoordinator
 *
 * @api                {PATCH} /v1/fieldcoordinator Update field coordinator
 * @apiDescription     Update field coordinator.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required|min:3|max:191
 *
 * @apiUse             FieldCoordinatorSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('fieldcoordinator', [
    'as' => 'api_fieldcoordinator_update_field_coordinator',
    'uses'  => 'Controller@updateFieldCoordinator',
    'middleware' => [
      'auth:api',
    ],
]);
