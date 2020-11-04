<?php

/**
 * @apiGroup           Media
 * @apiName            deleteAlbum
 *
 * @api                {DELETE} /v1/album delete album element
 * @apiDescription     Delete an element from album.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id         (required)
 * @apiParam           {String}  nursery_id (required without hotspot_id, plot_id)
 * @apiParam           {String}  hotspot_id (required without nursery_id, plot_id)
 * @apiParam           {String}  plot_id (required without nursery_id, hotspot_id)
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{}
 */

/** @var Route $router */
$router->delete('album', [
    'as' => 'api_media_delete_album',
    'uses'  => 'Controller@deleteAlbum',
    'middleware' => [
      'auth:api',
    ],
]);
