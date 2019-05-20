<?php

/**
 * @apiGroup           Plot
 * @apiName            createPlot
 *
 * @api                {POST} /v1/plot Create plot
 * @apiDescription     Create plot.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  farmer_id required
 * @apiParam           {String}  species_id
 * @apiParam           {String}  soil_type_id
 * @apiParam           {String}  legal_status_id
 * @apiParam           {String}  village_id
 * @apiParam           {String}  planting_distance_id
 * @apiParam           {String}  supporter_id
 * @apiParam           {String}  nursery_id
 * @apiParam           {String}  field_coordinator_id
 * @apiParam           {String}  planting_date
 * @apiParam           {String}  video_url
 * @apiParam           {String}  neighbours
 * @apiParam           {String}  landscape_features
 * @apiParam           {String}  general_conditions
 * @apiParam           {String}  fire_fighting
 * @apiParam           {Bool}    active
 * @apiParam           {Bool}    sample
 * @apiParam           {Int}     plants_planted
 * @apiParam           {String}  geo_data
 *
 * @apiUse             PlotSuccessSingleResponse
 */

/** @var Route $router */
$router->post('plot', [
    'as' => 'api_plot_create_plot',
    'uses'  => 'Controller@createPlot',
    'middleware' => [
      'auth:api',
    ],
]);
