<?php

/**
 * @apiGroup           Project
 * @apiName            findProjectById
 *
 * @api                {GET} /v1/project Find project
 * @apiDescription     Find project.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             ProjectSuccessSingleResponse
 */

/** @var Route $router */
$router->get('project', [
    'as' => 'api_project_find_project_by_id',
    'uses'  => 'Controller@findProjectById',
    'middleware' => [
      'auth:api',
    ],
]);
