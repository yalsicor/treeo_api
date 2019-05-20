<?php

/**
 * @apiGroup           LegalStatus
 * @apiName            updateLegalStatus
 *
 * @api                {PATCH} /v1/legal_status Update legal status
 * @apiDescription     Update legal status.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
 *
 * @apiUse             LegalStatusSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('legal_status', [
    'as' => 'api_legalstatus_update_legal_status',
    'uses'  => 'Controller@updateLegalStatus',
    'middleware' => [
      'auth:api',
    ],
]);
