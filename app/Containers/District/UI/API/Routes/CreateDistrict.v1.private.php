<?php

/**
 * @apiGroup           District
 * @apiName            createDistrict
 *
 * @api                {POST} /v1/district Create District
 * @apiDescription     Create District.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name
 *
 * @apiUse             DistrictSuccessSingleResponse
 */

/** @var Route $router */
$router->post('district', [
    'as' => 'api_district_create_district',
    'uses'  => 'Controller@createDistrict',
    'middleware' => [
      'auth:api',
    ],
]);
