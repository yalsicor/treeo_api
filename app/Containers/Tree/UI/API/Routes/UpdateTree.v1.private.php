<?php

/**
 * @apiGroup           Tree
 * @apiName            updateTree
 *
 * @api                {PATCH} /v1/tree Update tree
 * @apiDescription     Update tree.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  survey_id required
 * @apiParam           {String}  species_id required
 * @apiParam           {String}  dbh_cm
 * @apiParam           {String}  height_m
 * @apiParam           {String}  health
 * @apiParam           {String}  comment
 * @apiParam           {String}  geodata point as geojson
 * @apiParam           {Integer}  accuracy
 * @apiParam           {String}  timestamp
 * @apiParam           {File}    image
 *
 * @apiUse             TreeSuccessfulSingleResponse
 */

/** @var Route $router */
$router->patch('tree', [
    'as' => 'api_tree_update_tree',
    'uses'  => 'Controller@updateTree',
    'middleware' => [
      'auth:api',
    ],
]);
