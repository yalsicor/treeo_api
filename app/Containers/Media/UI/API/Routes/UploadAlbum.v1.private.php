<?php

/**
 * @apiGroup           Media
 * @apiName            uploadAlbum
 *
 * @api                {POST} /v1/album/upload Upload files to album
 * @apiDescription     Upload files to album.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  nursery_id (required without hotspot_id, plot_id)
 * @apiParam           {String}  hotspot_id (required without nursery_id, plot_id)
 * @apiParam           {String}  plot_id (required without nursery_id, hotspot_id)
 * @apiParam           {File}  album[] (required|array of images)
 *
 * @apiUse             AlbumSuccessfulMultipleResponse
 */

/** @var Route $router */
$router->post('album/upload', [
    'as' => 'api_media_album/upload',
    'uses'  => 'Controller@uploadAlbum',
    'middleware' => [
      'auth:api',
    ],
]);
