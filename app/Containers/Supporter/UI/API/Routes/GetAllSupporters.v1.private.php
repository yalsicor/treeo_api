<?php

/**
 * @apiGroup           Supporter
 * @apiName            getAllSupporters
 *
 * @api                {GET} /v1/supporters Get all supporters
 * @apiDescription     Get all supporters.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             SupporterSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('supporters', [
    'as' => 'api_supporter_get_all_supporters',
    'uses'  => 'Controller@getAllSupporters',
    'middleware' => [
      'auth:api',
    ],
]);
