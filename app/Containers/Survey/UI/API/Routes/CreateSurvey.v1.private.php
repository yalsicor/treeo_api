<?php

/**
 * @apiGroup           Survey
 * @apiName            createSurvey
 *
 * @api                {POST} /v1/survey Create survey
 * @apiDescription     Create survey.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  date_start required
 * @apiParam           {String}  date_end required
 * @apiParam           {String}  plot_id required
 * @apiParam           {String}  notes
 * @apiParam           {String}  status_id survey_status
 * @apiParam           {String}  treecount
 *
 * @apiUse             SurveySuccessfulSingleResponse
 */

/** @var Route $router */
$router->post('survey', [
    'as' => 'api_survey_create_survey',
    'uses'  => 'Controller@createSurvey',
    'middleware' => [
      'auth:api',
    ],
]);
