<?php

/**
 * @apiGroup           Supporter
 * @apiName            deleteSupporter
 *
 * @api                {DELETE} /v1/supporter Delete supporter
 * @apiDescription     Delete supporter.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('supporter', [
    'as' => 'api_supporter_delete_supporter',
    'uses'  => 'Controller@deleteSupporter',
    'middleware' => [
      'auth:api',
    ],
]);
