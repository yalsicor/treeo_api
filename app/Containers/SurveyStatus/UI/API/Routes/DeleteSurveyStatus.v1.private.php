<?php

/**
 * @apiGroup           SurveyStatus
 * @apiName            deleteSurveyStatus
 *
 * @api                {DELETE} /v1/survey_status Delete survey_status
 * @apiDescription     Delete survey_status.
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
$router->delete('survey_status', [
    'as' => 'api_surveystatus_delete_survey_status',
    'uses'  => 'Controller@deleteSurveyStatus',
    'middleware' => [
      'auth:api',
    ],
]);
