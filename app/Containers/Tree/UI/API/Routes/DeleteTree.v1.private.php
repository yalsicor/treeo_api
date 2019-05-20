<?php

/**
 * @apiGroup           Tree
 * @apiName            deleteTree
 *
 * @api                {DELETE} /v1/tree Delete tree
 * @apiDescription     Delete tree.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('tree', [
    'as' => 'api_tree_delete_tree',
    'uses'  => 'Controller@deleteTree',
    'middleware' => [
      'auth:api',
    ],
]);
