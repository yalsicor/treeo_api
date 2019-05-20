<?php

/**
 * @apiGroup           Hotspot
 * @apiName            deleteHotspot
 *
 * @api                {DELETE} /v1/hotspot Delete hotspot
 * @apiDescription     Delete hotspot.
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
$router->delete('hotspot', [
    'as' => 'api_hotspot_delete_hotspot',
    'uses'  => 'Controller@deleteHotspot',
    'middleware' => [
      'auth:api',
    ],
]);
