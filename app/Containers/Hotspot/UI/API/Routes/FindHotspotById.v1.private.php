<?php

/**
 * @apiGroup           Hotspot
 * @apiName            findHotspotById
 *
 * @api                {GET} /v1/hotspot Find hotspot
 * @apiDescription     Find hotspot.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             HotspotSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('hotspot', [
    'as' => 'api_hotspot_find_hotspot_by_id',
    'uses'  => 'Controller@findHotspotById',
    'middleware' => [
      'auth:api',
    ],
]);
