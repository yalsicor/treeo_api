<?php

/**
 * @apiGroup           Tree
 * @apiName            uploadTreeImage
 *
 * @api                {POST} /v1/tree/image Upload tree image
 * @apiDescription     Upload tree image.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager or Owner
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  image required image file
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Media",
        "id": "lv7xp94w95z8dg6j",
        "title": "vhlznj",
        "file": "yRxIf56JM7o1FfQnLFxzkO7IRPqGsVjS16rQvSrn.jpeg",
        "ext": "jpeg",
        "description": null,
        "alt": null,
        "filename": "DSC_6352.jpg",
        "created_at": "2019-02-23T00:15:49+00:00",
        "updated_at": "2019-02-23T00:15:49+00:00"
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

/** @var Route $router */
$router->post('tree/image', [
    'as' => 'api_tree_upload_tree_image',
    'uses'  => 'Controller@uploadTreeImage',
    'middleware' => [
      'auth:api',
    ],
]);
