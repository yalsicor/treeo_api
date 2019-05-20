<?php

/**
 * @apiGroup           Plot
 * @apiName            getPlotsView
 *
 * @api                {GET} /v1/plots/datatable Get plots as filterable objects.
 * @apiDescription     Get plots as filterable objects. **Extended filters can be applied.**
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             PlotViewSuccessSingleResponse
 */

/** @var Route $router */
$router->get('plots/datatable', [
    'as' => 'api_plot_get_plots_view',
    'uses'  => 'Controller@getPlotsView',
    'middleware' => [
      'auth:api',
    ],
]);
