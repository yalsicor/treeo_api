<?php

/**
 * @apiGroup           Supporter
 * @apiName            findSupporterById
 *
 * @api                {GET} /v1/supporter Find supporter
 * @apiDescription     Find supporter.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             SupporterSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('supporter', [
    'as' => 'api_supporter_find_supporter_by_id',
    'uses'  => 'Controller@findSupporterById',
    'middleware' => [
      'auth:api',
    ],
]);
