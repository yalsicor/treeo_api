<?php

/**
 * @apiGroup           SurveyStatus
 * @apiName            findSurveyStatusById
 *
 * @api                {GET} /v1/survey_status Find status_id
 * @apiDescription     Find status_id.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             SurveyStatusSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('survey_status', [
    'as' => 'api_surveystatus_find_survey_status_by_id',
    'uses'  => 'Controller@findSurveyStatusById',
    'middleware' => [
      'auth:api',
    ],
]);
