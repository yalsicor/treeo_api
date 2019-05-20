<?php

/**
 * @apiGroup           Survey
 * @apiName            updateSurvey
 *
 * @api                {PATCH} /v1/survey Update survey
 * @apiDescription     Update survey.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 * @apiParam           {Date}  date_start required
 * @apiParam           {Date}  date_end required
 * @apiParam           {Date}  date_import
 * @apiParam           {String}  plot_id required
 * @apiParam           {String}  notes
 * @apiParam           {String}  status_id survey_status
 * @apiParam           {String}  treecount only for legacy purpose
 *
 * @apiUse             SurveySuccessfulSingleResponse
 */

/** @var Route $router */
$router->patch('survey', [
    'as' => 'api_survey_update_survey',
    'uses'  => 'Controller@updateSurvey',
    'middleware' => [
      'auth:api',
    ],
]);
