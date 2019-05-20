<?php

/**
 * @apiGroup           Farmer
 * @apiName            registerFarmer
 *
 * @api                {POST} /v1/farmer/register Register a farmer as user
 * @apiDescription     Register a farmer as user.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  email required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('farmer/register', [
    'as' => 'api_farmer_register_farmer',
    'uses'  => 'Controller@registerFarmer',
    'middleware' => [
      'auth:api',
    ],
]);
