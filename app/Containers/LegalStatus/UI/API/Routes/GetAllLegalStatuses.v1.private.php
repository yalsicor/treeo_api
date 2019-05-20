<?php

/**
 * @apiGroup           LegalStatus
 * @apiName            getAllLegalStatuses
 *
 * @api                {GET} /v1/legal_statuses Get all legal status
 * @apiDescription     Get all legal status.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiUse             LegalStatusSuccessSingleResponse
 */

/** @var Route $router */
$router->get('legal_statuses', [
    'as' => 'api_legalstatus_get_all_legal_statuses',
    'uses'  => 'Controller@getAllLegalStatuses',
    'middleware' => [
      'auth:api',
    ],
]);
