<?php

/**
 * @apiGroup           Farmer
 * @apiName            getProfile
 *
 * @api                {GET} /v1/farmer/profile Get farmer profile
 * @apiDescription     Get farmer profile. Must be logged in as farmer.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Manager or Authenticated User
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
"data": {
    "object": "Farmer",
        "id": "dqb9073ap3ekzgrm",
        "identifier": "o1ep",
        "name": "GHjj HKhk",
        "story": "my story",
        "children": 0,
        "birthday": {
        "date": "1980-08-25 00:00:00.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "main_occupation": "something",
        "side_occupation": "something else",
        "spouse_name": "no idea",
        "spouse_birthday": {
        "date": "1980-08-25 00:00:00.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "spouse_main_occupation": "something",
        "spouse_side_occupation": "something else",
        "family_income_idr": 20000,
        "address": "somewhere",
        "user_id": "dqb9073ap3ekzgrm",
        "photo": null,
        "project_id": "qnwmkv5704blag6r",
        "project": "1mt",
        "gender": "male",
        "gender_id": "qmv7dk48x5b690wx",
        "created_at": {
        "date": "2018-12-06 14:28:54.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
        "date": "2018-12-06 14:28:54.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
 */

/** @var Route $router */
$router->get('farmer/profile', [
    'as' => 'api_farmer_get_profile',
    'uses'  => 'Controller@getProfile',
    'middleware' => [
      'auth:api',
    ],
]);
