<?php

/**
 * @apiGroup           Farmer
 * @apiName            getAllFarmers
 *
 * @api                {GET} /v1/farmers Get Farmers
 * @apiDescription     Get all farmers.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             FarmerSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('farmers', [
    'as' => 'api_farmer_get_all_farmers',
    'uses'  => 'Controller@getAllFarmers',
    'middleware' => [
      'auth:api',
    ],
]);
