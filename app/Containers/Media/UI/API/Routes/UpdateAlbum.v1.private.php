<?php

/**
 * @apiGroup           Media
 * @apiName            updateAlbum
 *
 * @api                {PATCH} /v1/album update album item
 * @apiDescription     Update a album item.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id         (required)
 * @apiParam           {String}  nursery_id    (required without hotspot_id)
 * @apiParam           {String}  hotspot_id    (required without nursery_id)
 * @apiParam           {String}  caption    (required)
 *
 * @apiUse             AlbumSuccessfulSingleResponse
 */

/** @var Route $router */
$router->patch('album', [
    'as' => 'api_media_update_album',
    'uses'  => 'Controller@updateAlbum',
    'middleware' => [
      'auth:api',
    ],
]);
