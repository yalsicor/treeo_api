<?php

/**
 * @apiGroup           Village
 * @apiName            getAllVillages
 *
 * @api                {GET} /v1/villages Get all villages
 * @apiDescription     Get all villages.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiUse             VillageSuccessSingleResponse
 */

/** @var Route $router */
$router->get('villages', [
    'as' => 'api_village_get_all_villages',
    'uses'  => 'Controller@getAllVillages',
    'middleware' => [
      'auth:api',
    ],
]);
