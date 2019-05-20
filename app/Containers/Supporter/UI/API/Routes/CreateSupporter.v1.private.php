<?php

/**
 * @apiGroup           Supporter
 * @apiName            createSupporter
 *
 * @api                {POST} /v1/supporter Create supporter
 * @apiDescription     Create supporter.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name
 * @apiParam           {File}  logo image
 * @apiParam           {String}  path
 *
 * @apiUse             SupporterSuccessfulSingleResponse
 */

/** @var Route $router */
$router->post('supporter', [
    'as' => 'api_supporter_create_supporter',
    'uses'  => 'Controller@createSupporter',
    'middleware' => [
      'auth:api',
    ],
]);
