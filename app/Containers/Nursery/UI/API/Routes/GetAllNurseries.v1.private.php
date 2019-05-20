<?php

/**
 * @apiGroup           Nursery
 * @apiName            getAllNurseries
 *
 * @api                {GET} /v1/nurseries Get all nurseries
 * @apiDescription     Get all nurseries.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             NurserySuccessSingleResponse
 */

/** @var Route $router */
$router->get('nurseries', [
    'as' => 'api_nursery_get_all_nurseries',
    'uses'  => 'Controller@getAllNurseries',
    'middleware' => [
      'auth:api',
    ],
]);
