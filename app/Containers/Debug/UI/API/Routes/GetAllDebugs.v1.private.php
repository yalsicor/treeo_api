<?php

/**
 * @apiGroup           Debug
 * @apiName            getAllDebugs
 *
 * @api                {GET} /v1/debugs Get all debug data
 * @apiDescription     Get all debug data.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Admin
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('debugs', [
    'as' => 'api_debug_get_all_debugs',
    'uses'  => 'Controller@getAllDebugs',
    'middleware' => [
      'auth:api',
    ],
]);
