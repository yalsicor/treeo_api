<?php

/**
 * @apiGroup           Hotspot
 * @apiName            updateHotspot
 *
 * @api                {PATCH} /v1/hotspot Update hotspot
 * @apiDescription     Update hotspot.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {File}    photo image
 * @apiParam           {String}  geo_data geojson
 * @apiParam           {String}  description
 * @apiParam           {String}  name_de
 * @apiParam           {String}  name_en
 * @apiParam           {String}  name_ms
 * @apiParam           {String}  link_de
 * @apiParam           {String}  link_en
 * @apiParam           {String}  link_ms
 *
 * @apiUse             HotspotSuccessfulSingleResponse
 */

/** @var Route $router */
$router->patch('hotspot', [
    'as' => 'api_hotspot_update_hotspot',
    'uses'  => 'Controller@updateHotspot',
    'middleware' => [
      'auth:api',
    ],
]);
