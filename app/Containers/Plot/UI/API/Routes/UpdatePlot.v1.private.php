<?php

/**
 * @apiGroup           Plot
 * @apiName            updatePlot
 *
 * @api                {PATCH} /v1/plot Update plot
 * @apiDescription     Update plot.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
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
 * @apiParam           {String}  geo_data <a href="https://geojson.org/">geojson</a> object, must contain polygon or multipolygon
 *
 * @apiUse             PlotSuccessSingleResponse
 * @apiUse             GeoJsonExample
 */

/** @var Route $router */
$router->patch('plot', [
    'as' => 'api_plot_update_plot',
    'uses'  => 'Controller@updatePlot',
    'middleware' => [
      'auth:api',
    ],
]);
