<?php

/**
 * @apiGroup           Tree
 * @apiName            getAllTrees
 *
 * @api                {GET} /v1/trees Get all trees
 * @apiDescription     Get all trees.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             TreeSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('trees', [
    'as' => 'api_tree_get_all_trees',
    'uses'  => 'Controller@getAllTrees',
    'middleware' => [
      'auth:api',
    ],
]);
