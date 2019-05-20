<?php

/**
 * @apiGroup           Nursery
 * @apiName            updateNursery
 *
 * @api                {PATCH} /v1/nursery Update nursery
 * @apiDescription     Update nursery.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  owner
 * @apiParam           {String}  geo_point geojson
 * @apiParam           {String}  cover image file
 *
 * @apiUse             NurserySuccessSingleResponse
 */

/** @var Route $router */
$router->patch('nursery', [
    'as' => 'api_nursery_update_nursery',
    'uses'  => 'Controller@updateNursery',
    'middleware' => [
      'auth:api',
    ],
]);
