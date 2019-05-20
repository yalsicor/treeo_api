<?php

/**
 * @apiGroup           Tree
 * @apiName            getOwnTrees
 *
 * @api                {GET} /v1/trees/own Get own trees
 * @apiDescription     Get only own trees.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Farmer
 *
 * @apiParam           {String}  survey_id optional
 *
 * @apiUse             TreeSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('trees/own', [
    'as' => 'api_tree_get_own_trees',
    'uses'  => 'Controller@getOwnTrees',
    'middleware' => [
      'auth:api',
    ],
]);
