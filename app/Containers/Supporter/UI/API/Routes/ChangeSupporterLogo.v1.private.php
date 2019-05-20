<?php

/**
 * @apiGroup           Supporter
 * @apiName            changeSupporterLogo
 *
 * @api                {POST} /v1/supporter/logo Change supporter logo
 * @apiDescription     Change supporter logo.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {File}  logo image file (leave empty to delete)
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
    "object": "Media",
        "id": "v9zdex5mn3kmgyap",
        "title": "Spokk",
        "file": "hWResLMpBsjTLYf3cfcFRR3MAPzkQzArtOBzwquN.jpeg",
        "ext": "jpeg",
        "description": null,
        "alt": null,
        "filename": "DSC_6555.jpg",
        "created_at": "2019-02-21T18:16:29+00:00",
        "updated_at": "2019-02-21T18:16:29+00:00"
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
 */

/** @var Route $router */
$router->post('supporter/logo', [
    'as' => 'api_supporter_change_supporter_logo',
    'uses'  => 'Controller@changeSupporterLogo',
    'middleware' => [
      'auth:api',
    ],
]);
