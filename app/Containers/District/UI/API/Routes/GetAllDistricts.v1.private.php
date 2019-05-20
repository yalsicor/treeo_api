<?php

/**
 * @apiGroup           District
 * @apiName            getAllDistricts
 *
 * @api                {GET} /v1/districts Get all districts
 * @apiDescription     Get all districts.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiUse             DistrictSuccessSingleResponse
 */

/** @var Route $router */
$router->get('districts', [
    'as' => 'api_district_get_all_districts',
    'uses'  => 'Controller@getAllDistricts',
    'middleware' => [
      'auth:api',
    ],
]);
