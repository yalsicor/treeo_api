<?php

/**
 * @apiGroup           SurveyStatus
 * @apiName            getAllSurveyStatuses
 *
 * @api                {GET} /v1/survey_statuses Get all survey_statuses
 * @apiDescription     Get all survey_statuses.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiUse             SurveyStatusSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('survey_statuses', [
    'as' => 'api_surveystatus_get_all_survey_statuses',
    'uses'  => 'Controller@getAllSurveyStatuses',
    'middleware' => [
      'auth:api',
    ],
]);
