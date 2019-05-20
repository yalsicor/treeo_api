<?php

/**
 * @apiGroup           SoilType
 * @apiName            updateSoilType
 *
 * @api                {PATCH} /v1/soil_type Update soil type
 * @apiDescription     Update soil type.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
 *
 * @apiUse             SoilTypeSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('soil_type', [
    'as' => 'api_soiltype_update_soil_type',
    'uses'  => 'Controller@updateSoilType',
    'middleware' => [
      'auth:api',
    ],
]);
