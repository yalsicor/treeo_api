<?php

/**
 * @apiGroup           Species
 * @apiName            findSpeciesById
 *
 * @api                {GET} /v1/species Find species
 * @apiDescription     Find species.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 *
 * @apiUse             SpeciesSuccessSingleResponse
 */

/** @var Route $router */
$router->get('species', [
    'as' => 'api_species_find_species_by_id',
    'uses'  => 'Controller@findSpeciesById',
    'middleware' => [
      'auth:api',
    ],
]);
