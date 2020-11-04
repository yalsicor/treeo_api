<?php

/**
 * @apiGroup           Tree
 * @apiName            createTree
 *
 * @api                {POST} /v1/tree Create tree
 * @apiDescription     Create tree.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner of survey
 *
 * @apiParam           {String}  survey_id required
 * @apiParam           {String}  species_id required
 * @apiParam           {String}  [dbh_cm]
 * @apiParam           {String}  [height_m] will be calculated, if not provided
 * @apiParam           {String}  [health]
 * @apiParam           {String}  [comment]
 * @apiParam           {String}  [geodata] point as geojson
 * @apiParam           {String}  [amigo_id]
 * @apiParam           {Integer}  [accuracy]
 * @apiParam           {String}  timestamp
 * @apiParam           {File}    image
 *
 * @apiUse             TreeSuccessfulSingleResponse
 */

/** @var Route $router */
$router->post('tree', [
    'as' => 'api_tree_create_tree',
    'uses'  => 'Controller@createTree',
    'middleware' => [
      'auth:api',
    ],
]);
