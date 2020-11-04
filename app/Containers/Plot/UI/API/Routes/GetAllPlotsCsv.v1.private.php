<?php

/**
 * @apiGroup           Plot
 * @apiName            getAllPlotsCsv
 *
 * @api                {GET} /v1/plots/csv Get all plots as csv file
 * @apiDescription     Get all plots as csv file. **Extended filters can be applied.**
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('plots/csv', [
    'as' => 'api_plot_get_all_plots_csv',
    'uses'  => 'Controller@getAllPlotsCsv',
    'middleware' => [
      'auth:api',
    ],
]);
