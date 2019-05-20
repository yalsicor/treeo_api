<?php

/**
 * @apiGroup           Hotspot
 * @apiName            getAllHotspots
 *
 * @api                {GET} /v1/hotspots Get all hotspots
 * @apiDescription     Get all hotspots.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             HotspotSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('hotspots', [
    'as' => 'api_hotspot_get_all_hotspots',
    'uses'  => 'Controller@getAllHotspots',
    'middleware' => [
      'auth:api',
    ],
]);
