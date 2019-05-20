<?php

/**
 * @apiGroup           Farmer
 * @apiName            changeFarmerProfilePhoto
 *
 * @api                {POST} /v1/farmer/photo Change farmer photo
 * @apiDescription     Change farmer photo.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Farmer
 *
 * @apiParam           {File}  photo image file (is deleted if null)
 * @apiParam           {String}  farmer_id farmer identifier (optional)
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
$router->post('farmer/photo', [
    'as' => 'api_farmer_change_farmer_profile_photo',
    'uses'  => 'Controller@changeFarmerProfilePhoto',
    'middleware' => [
      'auth:api',
    ],
]);
