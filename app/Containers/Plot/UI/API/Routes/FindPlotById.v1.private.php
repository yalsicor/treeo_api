<?php

/**
 * @apiGroup           Plot
 * @apiName            findPlotById
 *
 * @api                {GET} /v1/plot Find plot
 * @apiDescription     Find plot.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             PlotSuccessSingleResponse
 */

/** @var Route $router */
$router->get('plot', [
    'as' => 'api_plot_find_plot_by_id',
    'uses'  => 'Controller@findPlotById',
    'middleware' => [
      'auth:api',
    ],
]);
