<?php

/**
 * @apiGroup           SoilType
 * @apiName            createSoilType
 *
 * @api                {POST} /v1/soil_type Create soil type
 * @apiDescription     Create soil type.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name required
 *
 * @apiUse             SoilTypeSuccessSingleResponse
 */

/** @var Route $router */
$router->post('soil_type', [
    'as' => 'api_soiltype_create_soil_type',
    'uses'  => 'Controller@createSoilType',
    'middleware' => [
      'auth:api',
    ],
]);
