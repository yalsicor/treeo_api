<?php

/**
 * @apiGroup           District
 * @apiName            updateDistrict
 *
 * @api                {PATCH} /v1/district Update district
 * @apiDescription     Update district.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
 *
 * @apiUse             DistrictSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('district', [
    'as' => 'api_district_update_district',
    'uses'  => 'Controller@updateDistrict',
    'middleware' => [
      'auth:api',
    ],
]);
