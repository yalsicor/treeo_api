<?php

/**
 * @apiGroup           Survey
 * @apiName            getAllSurveysCsv
 *
 * @api                {GET} /v1/surveys/csv Get all surveys as csv file
 * @apiDescription     Get all surveys as csv file. **Extended filters can be applied.**
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('surveys/csv', [
    'as' => 'api_survey_get_all_surveys_csv',
    'uses'  => 'Controller@getAllSurveysCsv',
    'middleware' => [
      'auth:api',
    ],
]);
