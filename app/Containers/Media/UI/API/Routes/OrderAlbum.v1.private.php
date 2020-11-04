<?php

/**
 * @apiGroup           Media
 * @apiName            orderAlbum
 *
 * @api                {POST} /v1/album/order reorder album
 * @apiDescription     Reorder album.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  nursery_id (required without hotspot_id, plot_id)
 * @apiParam           {String}  hotspot_id (required without nursery_id, plot_id)
 * @apiParam           {String}  plot_id (required without nursery_id, hotspot_id)
 * @apiParam           {Array}  album (required) if empty, album is deleted ({String}  album[id] (required))
 *
 * @apiUse             AlbumSuccessfulMultipleResponse
 */

/** @var Route $router */
$router->post('album/order', [
    'as' => 'api_media_order_album',
    'uses'  => 'Controller@orderAlbum',
    'middleware' => [
      'auth:api',
    ],
]);
