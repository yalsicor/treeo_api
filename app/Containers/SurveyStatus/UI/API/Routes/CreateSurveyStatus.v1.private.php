<?php

/**
 * @apiGroup           SurveyStatus
 * @apiName            createSurveyStatus
 *
 * @api                {POST} /v1/survey_status Create survey_status
 * @apiDescription     Create survey_status.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name required
 *
 * @apiUse             SurveyStatusSuccessfulSingleResponse
 */

/** @var Route $router */
$router->post('survey_status', [
    'as' => 'api_surveystatus_create_survey_status',
    'uses'  => 'Controller@createSurveyStatus',
    'middleware' => [
      'auth:api',
    ],
]);
