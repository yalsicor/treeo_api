<?php

/**
 * @apiGroup           Plot
 * @apiName            forcePlotpolygon
 *
 * @api                {POST} /v1/plot/forceplotpolygon Force calculation of a plot polygon from survey
 * @apiDescription     Force calculation of a plot polygon from survey.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Admin
 *
 * @apiParam           {String}  survey_id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('plot/forceplotpolygon', [
    'as' => 'api_plot_force_plotpolygon',
    'uses'  => 'Controller@forcePlotPolygon',
    'middleware' => [
      'auth:api',
    ],
]);
