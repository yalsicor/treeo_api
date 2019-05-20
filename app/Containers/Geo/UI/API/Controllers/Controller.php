<?php

namespace App\Containers\Geo\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Geo\UI\API\Requests\GetCountriesForProjectPublicRequest;
use App\Containers\Geo\UI\API\Requests\GetDroneLayerRequest;
use App\Containers\Geo\UI\API\Requests\ListCountriesRequest;
use App\Containers\Geo\UI\API\Requests\ParseGeoJsonRequest;
use App\Containers\Geo\UI\API\Requests\ParseGeoJsonSingleSpotRequest;
use App\Containers\Geo\UI\API\Requests\TestRequest;
use App\Containers\Geo\UI\API\Transformers\CountryListTransformer;
use App\Ship\Parents\Controllers\ApiController;

/**
 * Class Controller
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param TestRequest $request
     */
    public function geoTest(TestRequest $request)
    {
        //have a reusable test route for geometry
    }

    /**
     * @param ParseGeoJsonRequest $request
     * @return mixed
     */
    public function parseGeoJson(ParseGeoJsonRequest $request)
    {
        return Apiato::call('Geo@ParseGeoJsonAction', [$request]);
    }
}
