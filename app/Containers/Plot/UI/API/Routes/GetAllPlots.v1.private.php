<?php

/**
 * @apiGroup           Plot
 * @apiName            getAllPlots
 *
 * @api                {GET} /v1/plots Get all plots
 * @apiDescription     Get all plots.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             PlotSuccessSingleResponse
 */

/** @var Route $router */
$router->get('plots', [
    'as' => 'api_plot_get_all_plots',
    'uses'  => 'Controller@getAllPlots',
    'middleware' => [
      'auth:api',
    ],
]);
