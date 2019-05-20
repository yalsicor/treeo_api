<?php

/**
 * @apiGroup           Hotspot
 * @apiName            createHotspot
 *
 * @api                {POST} /v1/hotspot Create hotspot
 * @apiDescription     Create hotspot.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
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
$router->post('hotspot', [
    'as' => 'api_hotspot_create_hotspot',
    'uses'  => 'Controller@createHotspot',
    'middleware' => [
      'auth:api',
    ],
]);
