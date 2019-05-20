<?php

/**
 * @apiGroup           Species
 * @apiName            updateSpecies
 *
 * @api                {PATCH} /v1/species Update species
 * @apiDescription     Update species.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager
 *
 * @apiParam           {String}  id required
 * @apiParam           {String}  name required
 * @apiParam           {String}  latin_name required
 *
 * @apiUse             SpeciesSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('species', [
    'as' => 'api_species_update_species',
    'uses'  => 'Controller@updateSpecies',
    'middleware' => [
      'auth:api',
    ],
]);
