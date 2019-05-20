<?php

/**
 * @apiGroup           Farmer
 * @apiName            getGender
 *
 * @api                {GET} /v1/genders Get Genders
 * @apiDescription     Get a list of all genders
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager, Farmer
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Gender",
            "id": "qnwmkv5704blag6r",
            "name": "female"
        },
        {
            "object": "Gender",
            "id": "qmv7dk48x5b690wx",
            "name": "male"
        }
    ],
    "meta": {
    "include": [],
        "custom": []
    }
}
 */

/** @var Route $router */
$router->get('genders', [
    'as' => 'api_farmer_get_all_genders',
    'uses'  => 'Controller@getAllGenders',
    'middleware' => [
      'auth:api',
    ],
]);
