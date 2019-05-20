<?php

/**
 * @apiGroup           SoilType
 * @apiName            findSoilTypeById
 *
 * @api                {GET} /v1/soil_type Find soil type
 * @apiDescription     Find soil type.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             SoilTypeSuccessSingleResponse
 */

/** @var Route $router */
$router->get('soil_type', [
    'as' => 'api_soiltype_find_soil_type_by_id',
    'uses'  => 'Controller@findSoilTypeById',
    'middleware' => [
      'auth:api',
    ],
]);
