<?php

/**
 * @apiGroup           Project
 * @apiName            deleteProject
 *
 * @api                {DELETE} /v1/project Delete project
 * @apiDescription     Delete project.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('project', [
    'as' => 'api_project_delete_project',
    'uses'  => 'Controller@deleteProject',
    'middleware' => [
      'auth:api',
    ],
]);
