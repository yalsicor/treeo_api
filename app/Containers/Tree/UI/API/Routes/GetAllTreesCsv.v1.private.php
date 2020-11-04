<?php

/**
 * @apiGroup           Tree
 * @apiName            getAllTreesCsv
 *
 * @api                {GET} /v1/trees/csv Get all trees as csv
 * @apiDescription     Get all trees as csv. **Extended filters can be applied.**
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('trees/csv', [
    'as' => 'api_tree_get_all_trees_csv',
    'uses'  => 'Controller@getAllTreesCsv',
    'middleware' => [
      'auth:api',
    ],
]);
