<?php

/**
 * @apiGroup           Media
 * @apiName            getAlbum
 *
 * @api                {GET} /v1/album get album
 * @apiDescription     Get album.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  nursery_id (required without hotspot_id)
 * @apiParam           {String}  hotspot_id (required without nursery_id)
 *
 * @apiUse             AlbumSuccessfulMultipleResponse
 */

/** @var Route $router */
$router->get('album', [
    'as' => 'api_media_get_album',
    'uses'  => 'Controller@getAlbum',
    'middleware' => [
      'auth:api',
    ],
]);
