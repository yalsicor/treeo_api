<?php

/**
 * @apiGroup           Farmer
 * @apiName            getAllFarmerCsv
 *
 * @api                {GET} /v1/farmers/csv Get all farmer as csv file
 * @apiDescription     Get all farmer as csv file. **Extended filters can be applied.**
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('farmers/csv', [
    'as' => 'api_farmer_get_all_farmer_csv',
    'uses'  => 'Controller@getAllFarmersCsv',
    'middleware' => [
      'auth:api',
    ],
]);
