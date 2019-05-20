<?php

/**
 * @apiGroup           Survey
 * @apiName            getAllSurveys
 *
 * @api                {GET} /v1/surveys Get all surveys
 * @apiDescription     Get all surveys.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             SurveySuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('surveys', [
    'as' => 'api_survey_get_all_surveys',
    'uses'  => 'Controller@getAllSurveys',
    'middleware' => [
      'auth:api',
    ],
]);
