<?php

/**
 * @apiGroup           Hotspot
 * @apiName            getHotspotsForWebmap
 *
 * @api                {GET} /v1/webmap/hotspots (P) Get hotspots for webmap
 * @apiDescription     Get hotspots for webmap.
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('webmap/hotspots', [
    'as' => 'api_hotspot_get_hotspots_for_webmap',
    'uses'  => 'Controller@getHotspotsForWebmap',
]);
