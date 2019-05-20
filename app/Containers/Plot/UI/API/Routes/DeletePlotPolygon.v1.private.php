<?php

/**
 * @apiGroup           Plot
 * @apiName            deletePlotPolygon
 *
 * @api                {DELETE} /v1/plot/polygon Delete plot polygon
 * @apiDescription     Delete plot polygon.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id
 *
 * @apiUse             PlotSuccessSingleResponse
 */

/** @var Route $router */
$router->delete('plot/polygon', [
    'as' => 'api_plot_delete_plot_polygon',
    'uses'  => 'Controller@deletePlotPolygon',
    'middleware' => [
      'auth:api',
    ],
]);
