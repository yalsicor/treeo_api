<?php

/** @var Route $router */
$router->post('geo/test', [
    'as' => 'api_geo_geo_test',
    'uses'  => 'Controller@geoTest',
]);
