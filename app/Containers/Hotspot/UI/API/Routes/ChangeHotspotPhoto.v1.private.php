<?php

/**
 * @apiGroup           Hotspot
 * @apiName            changeHotspotPhoto
 *
 * @api                {POST} /v1/hotspot/photo Change Hotspot photo
 * @apiDescription     Change Hotspot photo.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id
 * @apiParam           {File}  photo image file (leave empty to delete)
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
$router->post('hotspot/photo', [
    'as' => 'api_hotspot_change_hotspot_photo',
    'uses'  => 'Controller@changeHotspotPhoto',
    'middleware' => [
      'auth:api',
    ],
]);
