<?php

/**
 * @apiGroup           Tree
 * @apiName            findTreeById
 *
 * @api                {GET} /v1/tree Find tree
 * @apiDescription     Find tree.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             TreeSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('tree', [
    'as' => 'api_tree_find_tree_by_id',
    'uses'  => 'Controller@findTreeById',
    'middleware' => [
      'auth:api',
    ],
]);
