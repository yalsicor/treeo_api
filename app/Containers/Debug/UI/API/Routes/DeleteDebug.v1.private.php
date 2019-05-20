<?php

/**
 * @apiGroup           Debug
 * @apiName            deleteDebug
 *
 * @api                {DELETE} /v1/debug Delete debug data
 * @apiDescription     Delete debug data.
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
$router->delete('debug', [
    'as' => 'api_debug_delete_debug',
    'uses'  => 'Controller@deleteDebug',
    'middleware' => [
      'auth:api',
    ],
]);
