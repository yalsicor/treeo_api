<?php

namespace App\Containers\District\UI\API\Controllers;

use App\Containers\District\UI\API\Requests\CreateDistrictRequest;
use App\Containers\District\UI\API\Requests\DeleteDistrictRequest;
use App\Containers\District\UI\API\Requests\GetAllDistrictsRequest;
use App\Containers\District\UI\API\Requests\FindDistrictByIdRequest;
use App\Containers\District\UI\API\Requests\UpdateDistrictRequest;
use App\Containers\District\UI\API\Transformers\DistrictTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\District\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateDistrictRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createDistrict(CreateDistrictRequest $request)
    {
        $district = Apiato::call('District@CreateDistrictAction', [$request]);

        return $this->created($this->transform($district, DistrictTransformer::class));
    }

    /**
     * @param FindDistrictByIdRequest $request
     * @return array
     */
    public function findDistrictById(FindDistrictByIdRequest $request)
    {
        $district = Apiato::call('District@FindDistrictByIdAction', [$request]);

        return $this->transform($district, DistrictTransformer::class);
    }

    /**
     * @param GetAllDistrictsRequest $request
     * @return array
     */
    public function getAllDistricts(GetAllDistrictsRequest $request)
    {
        $districts = Apiato::call('District@GetAllDistrictsAction', [$request]);

        return $this->transform($districts, DistrictTransformer::class);
    }

    /**
     * @param UpdateDistrictRequest $request
     * @return array
     */
    public function updateDistrict(UpdateDistrictRequest $request)
    {
        $district = Apiato::call('District@UpdateDistrictAction', [$request]);

        return $this->transform($district, DistrictTransformer::class);
    }

    /**
     * @param DeleteDistrictRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDistrict(DeleteDistrictRequest $request)
    {
        Apiato::call('District@DeleteDistrictAction', [$request]);

        return $this->noContent();
    }
}
