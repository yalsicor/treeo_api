<?php

/**
 * @apiGroup           Nursery
 * @apiName            changeNurseryCover
 *
 * @api                {POST} /v1/nursery/cover Change nursery cover
 * @apiDescription     Change nursery cover.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id
 * @apiParam           {File}  cover image file (leave empty to delete)
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
$router->post('nursery/cover', [
    'as' => 'api_nursery_change_nursery_cover',
    'uses'  => 'Controller@changeNurseryCover',
    'middleware' => [
      'auth:api',
    ],
]);
