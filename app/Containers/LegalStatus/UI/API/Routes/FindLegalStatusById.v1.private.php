<?php

/**
 * @apiGroup           LegalStatus
 * @apiName            findLegalStatusById
 *
 * @api                {GET} /v1/legal_status Find legal status
 * @apiDescription     Find legal status.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             LegalStatusSuccessSingleResponse
 */

/** @var Route $router */
$router->get('legal_status', [
    'as' => 'api_legalstatus_find_legal_status_by_id',
    'uses'  => 'Controller@findLegalStatusById',
    'middleware' => [
      'auth:api',
    ],
]);
