<?php

/**
 * @apiGroup           Survey
 * @apiName            deleteSurvey
 *
 * @api                {DELETE} /v1/survey Delete survey
 * @apiDescription     Delete survey.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('survey', [
    'as' => 'api_survey_delete_survey',
    'uses'  => 'Controller@deleteSurvey',
    'middleware' => [
      'auth:api',
    ],
]);
