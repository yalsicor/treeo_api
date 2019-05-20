<?php

/**
 * @apiGroup           Debug
 * @apiName            createDebug
 *
 * @api                {POST} /v1/debugs Save debug data
 * @apiDescription     Save debug data.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Farmer
 *
 * @apiParam           {String}  timestamp required
 * @apiParam           {String}  data required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('debugs', [
    'as' => 'api_debug_create_debug',
    'uses'  => 'Controller@createDebug',
    'middleware' => [
      'auth:api',
    ],
]);
