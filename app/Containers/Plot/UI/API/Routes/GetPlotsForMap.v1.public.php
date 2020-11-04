<?php

/**
 * @apiGroup           Plot
 * @apiName            getPlotAlbumPublic
 *
 * @api                {GET} /v1/public/plots/map (P) Get plots for map
 * @apiDescription     Get plots for map.
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
$router->get('public/plots/map', [
    'as' => 'api_plot_get_plot_for_map_public',
    'uses'  => 'Controller@getPlotsForMapPublic',
]);
