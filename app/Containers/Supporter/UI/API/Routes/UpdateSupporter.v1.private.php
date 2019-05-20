<?php

/**
 * @apiGroup           Supporter
 * @apiName            updateSupporter
 *
 * @api                {PATCH} /v1/supporter Update supporter
 * @apiDescription     Update supporter.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name
 * @apiParam           {File}  logo image
 * @apiParam           {String}  path
 *
 * @apiUse             SupporterSuccessfulSingleResponse
 */

/** @var Route $router */
$router->patch('supporter', [
    'as' => 'api_supporter_update_supporter',
    'uses'  => 'Controller@updateSupporter',
    'middleware' => [
      'auth:api',
    ],
]);
