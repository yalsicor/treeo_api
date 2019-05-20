<?php

/**
 * @apiGroup           FieldCoordinator
 * @apiName            getAllFieldCoordinators
 *
 * @api                {GET} /v1/fieldcoordinators Get all field coordinators
 * @apiDescription     Get all field coordinators.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             FieldCoordinatorSuccessSingleResponse
 */

/** @var Route $router */
$router->get('fieldcoordinators', [
    'as' => 'api_fieldcoordinator_get_all_field_coordinators',
    'uses'  => 'Controller@getAllFieldCoordinators',
    'middleware' => [
      'auth:api',
    ],
]);
