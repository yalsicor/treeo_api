<?php

/**
 * @apiGroup           Plot
 * @apiName            getOwnPlots
 *
 * @api                {GET} /v1/plots/own Get own plots
 * @apiDescription     Get only own plots.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Farmer
 *
 *
 * @apiUse             PlotSuccessSingleResponse
 */

/** @var Route $router */
$router->get('plots/own', [
    'as' => 'api_plot_get_own_plots',
    'uses'  => 'Controller@getOwnPlots',
    'middleware' => [
      'auth:api',
    ],
]);
