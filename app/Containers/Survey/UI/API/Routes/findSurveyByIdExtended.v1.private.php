<?php

/**
 * @apiGroup           Survey
 * @apiName            findSurveyByIdExtended
 *
 * @api                {GET} /v1/survey/datatable Find survey with extended dataset
 * @apiDescription     Find survey with extended dataset.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager|Owner
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             SurveyViewSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('survey/datatable', [
    'as' => 'api_survey_find_survey_by_id_extended',
    'uses'  => 'Controller@findSurveyByIdExtended',
    'middleware' => [
      'auth:api',
    ],
]);
