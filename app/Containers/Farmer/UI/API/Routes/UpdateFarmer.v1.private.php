<?php

/**
 * @apiGroup           Farmer
 * @apiName            updateFarmer
 *
 * @api                {PATCH} /v1/farmer Update Farmer
 * @apiDescription     Update farmer.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
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
$router->patch('farmer', [
    'as' => 'api_farmer_update_farmer',
    'uses'  => 'Controller@updateFarmer',
    'middleware' => [
      'auth:api',
    ],
]);
