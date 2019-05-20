<?php

/**
 * @apiGroup           SoilType
 * @apiName            getAllSoilTypes
 *
 * @api                {GET} /v1/soil_types Get all soil types
 * @apiDescription     Get all soil types.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiUse             SoilTypeSuccessSingleResponse
 */

/** @var Route $router */
$router->get('soil_types', [
    'as' => 'api_soiltype_get_all_soil_types',
    'uses'  => 'Controller@getAllSoilTypes',
    'middleware' => [
      'auth:api',
    ],
]);
