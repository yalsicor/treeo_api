<?php

/**
 * @apiGroup           Survey
 * @apiName            getSurveyView
 *
 * @api                {GET} /v1/surveys/datatable get surveys as filterable objects
 * @apiDescription     get surveys as filterable objects. **Extended filters can be applied.**
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiUse             SurveyViewSuccessfulSingleResponse
 */

/** @var Route $router */
$router->get('surveys/datatable', [
    'as' => 'api_survey_get_survey_view',
    'uses'  => 'Controller@getSurveyView',
    'middleware' => [
      'auth:api',
    ],
]);
