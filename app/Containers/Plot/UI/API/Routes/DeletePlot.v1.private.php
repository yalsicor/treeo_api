<?php

/**
 * @apiGroup           Plot
 * @apiName            deletePlot
 *
 * @api                {DELETE} /v1/plot Delete plot
 * @apiDescription     Delete plot.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
@apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('plot', [
    'as' => 'api_plot_delete_plot',
    'uses'  => 'Controller@deletePlot',
    'middleware' => [
      'auth:api',
    ],
]);
