<?php

/**
 * @apiGroup           SurveyStatus
 * @apiName            updateSurveyStatus
 *
 * @api                {PATCH} /v1/survey_status Update survey_status
 * @apiDescription     Update survey_status.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
 *
 * @apiUse             SurveyStatusSuccessfulSingleResponse
 */

/** @var Route $router */
$router->patch('survey_status', [
    'as' => 'api_surveystatus_update_survey_status',
    'uses'  => 'Controller@updateSurveyStatus',
    'middleware' => [
      'auth:api',
    ],
]);
