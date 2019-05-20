<?php

/**
 * @apiGroup           Plot
 * @apiName            calculatePlotPolygon
 *
 * @api                {POST} /v1/plot/generatepolygon Generate plot polygon
 * @apiDescription     Generate plot polygon from survey trees. The plot needs a survey with more than 20 trees and treecount NULL (new survey).
 *
 * @apiVersion         1.0.0
 * @apiPermission      Plot owner | Manager
 *
 * @apiParam           {String}  id required plot identifier
 *
 * @apiUse             PlotSuccessSingleResponse
 */

/** @var Route $router */
$router->post('plot/generatepolygon', [
    'as' => 'api_plot_generate_plot_polygon',
    'uses'  => 'Controller@generatePlotPolygon',
    'middleware' => [
      'auth:api',
    ],
]);
