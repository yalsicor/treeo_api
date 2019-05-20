<?php

/**
 * @apiGroup           Nursery
 * @apiName            createNursery
 *
 * @api                {POST} /v1/nursery Create nursery
 * @apiDescription     Create nursery.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  owner
 * @apiParam           {String}  geo_point geojson
 * @apiParam           {String}  cover image file
 *
 * @apiUse             NurserySuccessSingleResponse
 */

/** @var Route $router */
$router->post('nursery', [
    'as' => 'api_nursery_create_nursery',
    'uses'  => 'Controller@createNursery',
    'middleware' => [
      'auth:api',
    ],
]);
