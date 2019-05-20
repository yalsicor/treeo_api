<?php

/**
 * @apiGroup           FieldCoordinator
 * @apiName            findFieldCoordinatorById
 *
 * @api                {GET} /v1/fieldcoordinator Find field coordinator
 * @apiDescription     Find field coordinator.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             FieldCoordinatorSuccessSingleResponse
 */

/** @var Route $router */
$router->get('fieldcoordinator', [
    'as' => 'api_fieldcoordinator_find_field_coordinator_by_id',
    'uses'  => 'Controller@findFieldCoordinatorById',
    'middleware' => [
      'auth:api',
    ],
]);
