<?php

/**
 * @apiGroup           Survey
 * @apiName            findSurveyById
 *
 * @api                {GET} /v1/survey Find survey
 * @apiDescription     Find survey.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             SurveySuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('survey', [
    'as' => 'api_survey_find_survey_by_id',
    'uses'  => 'Controller@findSurveyById',
    'middleware' => [
      'auth:api',
    ],
]);
