<?php

/**
 * @apiGroup           Nursery
 * @apiName            findNurseryById
 *
 * @api                {GET} /v1/nursery Find nursery
 * @apiDescription     Find nursery by id.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             NurserySuccessSingleResponse
 */

/** @var Route $router */
$router->get('nursery', [
    'as' => 'api_nursery_find_nursery_by_id',
    'uses'  => 'Controller@findNurseryById',
    'middleware' => [
      'auth:api',
    ],
]);
