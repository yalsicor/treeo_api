<?php

/**
 * @apiGroup           Farmer
 * @apiName            createFarmer
 *
 * @api                {POST} /v1/farmer Create farmer
 * @apiDescription     Create a new farmer.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name required
 * @apiParam           {String}  email required
 * @apiParam           {String}  story
 * @apiParam           {String}  project_id
 * @apiParam           {Numeric}  children
 * @apiParam           {Date}  birthday
 * @apiParam           {File}  photo image file
 * @apiParam           {String}  main_occupation
 * @apiParam           {String}  side_occupation
 * @apiParam           {String}  spouse_name
 * @apiParam           {Date}  Spouse_birthday
 * @apiParam           {String}  spouse_main_occupation
 * @apiParam           {String}  spouse_side_occupation
 * @apiParam           {Numeric}  family_income_idr
 * @apiParam           {String}  address
 * @apiParam           {String}  gender_id
 *
 * @apiUse             FarmerSuccessfulSingleResponse
 */

/** @var Route $router */
$router->post('farmer', [
    'as' => 'api_farmer_create_farmer',
    'uses'  => 'Controller@createFarmer',
    'middleware' => [
      'auth:api',
    ],
]);
