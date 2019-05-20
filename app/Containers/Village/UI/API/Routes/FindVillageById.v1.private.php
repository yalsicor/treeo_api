<?php

/**
 * @apiGroup           Village
 * @apiName            findVillageById
 *
 * @api                {GET} /v1/village Find village
 * @apiDescription     Find village.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             VillageSuccessSingleResponse
 */

/** @var Route $router */
$router->get('village', [
    'as' => 'api_village_find_village_by_id',
    'uses'  => 'Controller@findVillageById',
    'middleware' => [
      'auth:api',
    ],
]);
