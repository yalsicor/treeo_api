<?php

/**
 * @apiGroup           Project
 * @apiName            updateProject
 *
 * @api                {PATCH} /v1/project Update project
 * @apiDescription     Update project.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
 *
 * @apiUse             ProjectSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('project', [
    'as' => 'api_project_update_project',
    'uses'  => 'Controller@updateProject',
    'middleware' => [
      'auth:api',
    ],
]);
