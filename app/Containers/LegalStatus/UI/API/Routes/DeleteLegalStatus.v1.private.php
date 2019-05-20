<?php

/**
 * @apiGroup           LegalStatus
 * @apiName            deleteLegalStatus
 *
 * @api                {DELETE} /v1/legal_status Delete legal status
 * @apiDescription     Delete legal status.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('legal_status', [
    'as' => 'api_legalstatus_delete_legal_status',
    'uses'  => 'Controller@deleteLegalStatus',
    'middleware' => [
      'auth:api',
    ],
]);
