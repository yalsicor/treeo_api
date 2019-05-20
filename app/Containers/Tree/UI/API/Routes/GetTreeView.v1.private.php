<?php

/**
 * @apiGroup           Tree
 * @apiName            getTreeView
 *
 * @api                {GET} /v1/trees/datatable Get trees as filterable objects
 * @apiDescription     Get trees as filterable objects. **Extended filters can be applied.**
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             TreeViewSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('trees/datatable', [
    'as' => 'api_tree_get_tree_view',
    'uses'  => 'Controller@getTreeView',
    'middleware' => [
      'auth:api',
    ],
]);
