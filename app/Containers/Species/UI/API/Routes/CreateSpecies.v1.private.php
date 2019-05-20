<?php

/**
 * @apiGroup           Species
 * @apiName            createSpecies
 *
 * @api                {POST} /v1/species Create species
 * @apiDescription     Create species.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  name required
 * @apiParam           {String}  latin_name required
 *
 * @apiUse             SpeciesSuccessSingleResponse
 */

/** @var Route $router */
$router->post('species', [
    'as' => 'api_species_create_species',
    'uses'  => 'Controller@createSpecies',
    'middleware' => [
      'auth:api',
    ],
]);
