<?php

/**
 * @apiGroup           OAuth2
 * @apiName            ClientUserMobileAppLoginProxy
 * @api                {post} /v1/clients/mobile/user/login Mobile App Login (Password Grant with proxy)
 * @apiDescription     Login Users using their email and password, without client_id and client_secret.
 *
 * @apiVersion         1.0.0
 *
 * @apiParam           {String}  email user email
 * @apiParam           {String}  password user password
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 200 OK
{
    "token_type": "Bearer",
    "expires_in": 315360000,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbG...",
    "refresh_token": "ZFDPA1S7H8Wydjkjl+xt+hPGWTagX..."
}
 */

/** @var Route $router */
$router->post('clients/mobile/user/login', [
    'as' => 'api_authentication_proxy_login_for_user_mobile_client',
    'uses'  => 'Controller@proxyLoginForUserMobileClient',
]);
