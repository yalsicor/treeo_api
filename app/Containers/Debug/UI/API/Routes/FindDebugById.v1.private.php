<?php

/**
 * @apiGroup           Debug
 * @apiName            findDebugById
 *
 * @api                {GET} /v1/debug Find debug data by id
 * @apiDescription     Find debug data by id.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Admin
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('debug', [
    'as' => 'api_debug_find_debug_by_id',
    'uses'  => 'Controller@findDebugById',
    'middleware' => [
      'auth:api',
    ],
]);
