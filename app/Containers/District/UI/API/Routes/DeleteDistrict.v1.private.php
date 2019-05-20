<?php

/**
 * @apiGroup           District
 * @apiName            deleteDistrict
 *
 * @api                {DELETE} /v1/district Delete district
 * @apiDescription     Delete district.
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
$router->delete('district', [
    'as' => 'api_district_delete_district',
    'uses'  => 'Controller@deleteDistrict',
    'middleware' => [
      'auth:api',
    ],
]);
