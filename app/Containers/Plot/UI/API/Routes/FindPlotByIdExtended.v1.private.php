<?php

/**
 * @apiGroup           Plot
 * @apiName            findPlotByIdExtended
 *
 * @api                {GET} /v1/plot/datatable Find plot with extended dataset
 * @apiDescription     Find plot with extended dataset.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
 * @apiUse PlotViewSuccessSingleResponse
 */

/** @var Route $router */
$router->get('plot/datatable', [
    'as' => 'api_plot_find_plot_by_id_extended',
    'uses'  => 'Controller@findPlotByIdExtended',
    'middleware' => [
      'auth:api',
    ],
]);
