<?php

/**
 * @apiGroup           Project
 * @apiName            getAllProjects
 *
 * @api                {GET} /v1/projects Get all projects
 * @apiDescription     Get all projects.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiUse             ProjectSuccessSingleResponse
 */

/** @var Route $router */
$router->get('projects', [
    'as' => 'api_project_get_all_projects',
    'uses'  => 'Controller@getAllProjects',
    'middleware' => [
      'auth:api',
    ],
]);
