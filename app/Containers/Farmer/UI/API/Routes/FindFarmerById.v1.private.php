<?php

/**
 * @apiGroup           Farmer
 * @apiName            findFarmerById
 *
 * @api                {GET} /v1/farmer Get Farmer
 * @apiDescription     Get single farmer by id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id
 *
 * @apiUse             FarmerSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('farmer', [
    'as' => 'api_farmer_find_farmer_by_id',
    'uses'  => 'Controller@findFarmerById',
    'middleware' => [
      'auth:api',
    ],
]);
