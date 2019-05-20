<?php

/**
 * @apiGroup           Tree
 * @apiName            findTreeByIdExtended
 *
 * @api                {GET} /v1/tree/datatable Find tree with extended dataset
 * @apiDescription     Find tree with extended dataset.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             TreeViewSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('tree/datatable', [
    'as' => 'api_tree_find_tree_by_id_extended',
    'uses'  => 'Controller@findTreeByIdExtended',
    'middleware' => [
      'auth:api',
    ],
]);
