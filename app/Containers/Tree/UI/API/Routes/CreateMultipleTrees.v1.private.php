<?php

/**
 * @apiGroup           Trees
 * @apiName            createMultipleTrees
 *
 * @api                {POST} /v1/trees Create multiple trees at once
 * @apiDescription     Create multiple trees at once.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager or Owner
 *
 * @apiParam           {String}  survey_id required
 * @apiParam           {String}  tree_data required array of trees
 * @apiParam           {String}  tree_data.species_id required
 * @apiParam           {String}  tree_data.dbh_cm
 * @apiParam           {String}  tree_data.height_m
 * @apiParam           {String}  tree_data.health
 * @apiParam           {String}  tree_data.comment
 * @apiParam           {String}  tree_data.geodata point as geojson
 * @apiParam           {Integer}  tree_data.accuracy
 * @apiParam           {String}  tree_data.timestamp
 *
 * @apiUse             TreeSuccessfulSingleResponse
 */

/** @var Route $router */
$router->post('trees', [
    'as' => 'api_tree_create_multiple_trees',
    'uses'  => 'Controller@createMultipleTrees',
    'middleware' => [
      'auth:api',
    ],
]);
