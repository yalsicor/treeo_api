<?php

/**
 * @apiGroup           Project
 * @apiName            createProject
 *
 * @api                {POST} /v1/project Create project
 * @apiDescription     Create project.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name
 *
 * @apiUse             ProjectSuccessSingleResponse
 */

/** @var Route $router */
$router->post('project', [
    'as' => 'api_project_create_project',
    'uses'  => 'Controller@createProject',
    'middleware' => [
      'auth:api',
    ],
]);
