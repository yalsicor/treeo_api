<?php

/**
 * @apiGroup           Plot
 * @apiName            changePlotPolygon
 *
 * @api                {POST} /v1/plot/polygon Change plot polygon
 * @apiDescription     Change plot polygon.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager or Owner
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  geodata required <a href="https://geojson.org/">geojson</a> object, must contain polygon or multipolygon
 *
 * @apiUse             PlotSuccessSingleResponse
 * @apiUse             GeoJsonExample
 */

/** @var Route $router */
$router->post('plot/polygon', [
    'as' => 'api_plot_change_plot_polygon',
    'uses'  => 'Controller@changePlotPolygon',
    'middleware' => [
      'auth:api',
    ],
]);
