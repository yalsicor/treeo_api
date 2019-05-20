<?php

/**
 * @apiGroup           Village
 * @apiName            createVillage
 *
 * @api                {POST} /v1/village Create village
 * @apiDescription     Create village.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name required
 * @apiParam           {String}  district_id required
 *
 * @apiUse             VillageSuccessSingleResponse
 */

/** @var Route $router */
$router->post('village', [
    'as' => 'api_village_create_village',
    'uses'  => 'Controller@createVillage',
    'middleware' => [
      'auth:api',
    ],
]);
