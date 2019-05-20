<?php

/**
 * @apiGroup           Users
 * @apiName            registerUser
 * @api                {post} /v1/register Register User (create client)
 * @apiDescription     Register users as (client).
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  email (required)
 * @apiParam           {String}  name (optional)
 * @apiParam           {String}  gender (optional)
 * @apiParam           {String}  birth (optional)
 * @apiParam           {Bool}  admin (optional)
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->post('/register', [
    'as' => 'api_user_register_user',
    'uses'  => 'Controller@registerUser',
    'middleware' => [
        'auth:api',
    ],
]);
