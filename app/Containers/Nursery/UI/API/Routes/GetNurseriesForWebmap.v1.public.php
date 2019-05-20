<?php

/**
 * @apiGroup           Nursery
 * @apiName            getAllNurseriesPublic
 *
 * @api                {GET} /v1/webmap/nurseries (P) Get nurseries for webmap
 * @apiDescription     Get nurseries for webmap.
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('webmap/nurseries', [
    'as' => 'api_nursery_get_all_nurseries_public',
    'uses'  => 'Controller@getNurseriesForWebmap',
]);
