<?php

/**
 * @apiGroup           Species
 * @apiName            getAllSpecies
 *
 * @api                {GET} /v1/species/all Get all species
 * @apiDescription     Get all species.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiUse             SpeciesSuccessSingleResponse
 */

/** @var Route $router */
$router->get('species/all', [
    'as' => 'api_species_get_all_species',
    'uses'  => 'Controller@getAllSpecies',
    'middleware' => [
      'auth:api',
    ],
]);
