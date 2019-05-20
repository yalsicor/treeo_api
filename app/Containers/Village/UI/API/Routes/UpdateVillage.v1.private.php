<?php

/**
 * @apiGroup           Village
 * @apiName            updateVillage
 *
 * @api                {PATCH} /v1/village Update village
 * @apiDescription     Update village.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
 * @apiParam           {String}  district_id required
 *
 * @apiUse             VillageSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('village', [
    'as' => 'api_village_update_village',
    'uses'  => 'Controller@updateVillage',
    'middleware' => [
      'auth:api',
    ],
]);
