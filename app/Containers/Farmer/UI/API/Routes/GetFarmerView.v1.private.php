<?php

/**
 * @apiGroup           Farmer
 * @apiName            getFarmerView
 *
 * @api                {GET} /v1/farmers/datatable Get farmers as filterable objects
 * @apiDescription     Get farmers as filterable objects. **Extended filters can be applied.**
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             FarmerViewSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('farmers/datatable', [
    'as' => 'api_farmer_get_farmer_view',
    'uses'  => 'Controller@getFarmerView',
    'middleware' => [
      'auth:api',
    ],
]);
