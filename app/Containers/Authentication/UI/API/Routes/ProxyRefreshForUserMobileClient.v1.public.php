<?php

/**
 * @apiGroup           OAuth2
 * @apiName            ClientUserMobileAppRefreshProxy
 * @api                {post} /v1/clients/mobile/user/refresh Mobile App Refresh
 * @apiDescription     If `refresh_token` is not provided the w'll try to get it from the http cookie.
 *
 * @apiVersion         1.0.0
 *
 * @apiParam           {String}  [refresh_token] The refresh Token
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
$router->post('clients/mobile/user/refresh', [
    'as' => 'api_authentication_proxy_refresh_for_user_mobile_client',
    'uses'  => 'Controller@proxyRefreshForUserMobileClient',
]);
