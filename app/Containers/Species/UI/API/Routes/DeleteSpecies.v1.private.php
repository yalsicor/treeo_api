<?php

/**
 * @apiGroup           Species
 * @apiName            deleteSpecies
 *
 * @api                {DELETE} /v1/species Delete species
 * @apiDescription     Delete sepcies.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
}
 */

/** @var Route $router */
$router->delete('species', [
    'as' => 'api_species_delete_species',
    'uses'  => 'Controller@deleteSpecies',
    'middleware' => [
      'auth:api',
    ],
]);
