<?php

/**
 * @apiGroup           District
 * @apiName            findDistrictById
 *
 * @api                {GET} /v1/district Find district
 * @apiDescription     Find district by id.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             DistrictSuccessSingleResponse
 */

/** @var Route $router */
$router->get('district', [
    'as' => 'api_district_find_district_by_id',
    'uses'  => 'Controller@findDistrictById',
    'middleware' => [
      'auth:api',
    ],
]);
