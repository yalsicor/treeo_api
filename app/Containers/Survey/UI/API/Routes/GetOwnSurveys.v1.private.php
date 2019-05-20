<?php

/**
 * @apiGroup           Survey
 * @apiName            getOwnSurveys
 *
 * @api                {GET} /v1/surveys/own Get own surveys
 * @apiDescription     Get only own surveys.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Farmer
 *
 * @apiParam           {String}  plot_id optional
 *
 * @apiUse             SurveySuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('surveys/own', [
    'as' => 'api_survey_get_own_surveys',
    'uses'  => 'Controller@getOwnSurveys',
    'middleware' => [
      'auth:api',
    ],
]);
