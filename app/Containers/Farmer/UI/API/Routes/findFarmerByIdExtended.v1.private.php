<?php

/**
 * @apiGroup           Farmer
 * @apiName            findFarmerByIdExtended
 *
 * @api                {GET} /v1/farmer/datatable Find farmer with extended dataset
 * @apiDescription     Find farmer with extended dataset.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             FarmerViewSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('farmer/datatable', [
    'as' => 'api_farmer_find_farmer_by_id_extended',
    'uses'  => 'Controller@findFarmerByIdExtended',
    'middleware' => [
      'auth:api',
    ],
]);
