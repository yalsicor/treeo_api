<?php

/**
 * @apiGroup           Nursery
 * @apiName            deleteNursery
 *
 * @api                {DELETE} /v1/nursery Delete nursery
 * @apiDescription     Delete nursery.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('nursery', [
    'as' => 'api_nursery_delete_nursery',
    'uses'  => 'Controller@deleteNursery',
    'middleware' => [
      'auth:api',
    ],
]);
