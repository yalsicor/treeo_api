<?php

/**
 * @apiGroup           LegalStatus
 * @apiName            createLegalStatus
 *
 * @api                {POST} /v1/legal_status Create legal status
 * @apiDescription     Create legal status.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name required
 *
 * @apiUse             LegalStatusSuccessSingleResponse
 */

/** @var Route $router */
$router->post('legal_status', [
    'as' => 'api_legalstatus_create_legal_status',
    'uses'  => 'Controller@createLegalStatus',
    'middleware' => [
      'auth:api',
    ],
]);
