<?php

namespace App\Containers\SoilType\UI\API\Controllers;

use App\Containers\SoilType\UI\API\Requests\CreateSoilTypeRequest;
use App\Containers\SoilType\UI\API\Requests\DeleteSoilTypeRequest;
use App\Containers\SoilType\UI\API\Requests\GetAllSoilTypesRequest;
use App\Containers\SoilType\UI\API\Requests\FindSoilTypeByIdRequest;
use App\Containers\SoilType\UI\API\Requests\UpdateSoilTypeRequest;
use App\Containers\SoilType\UI\API\Transformers\SoilTypeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\SoilType\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateSoilTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSoilType(CreateSoilTypeRequest $request)
    {
        $soiltype = Apiato::call('SoilType@CreateSoilTypeAction', [$request]);

        return $this->created($this->transform($soiltype, SoilTypeTransformer::class));
    }

    /**
     * @param FindSoilTypeByIdRequest $request
     * @return array
     */
    public function findSoilTypeById(FindSoilTypeByIdRequest $request)
    {
        $soiltype = Apiato::call('SoilType@FindSoilTypeByIdAction', [$request]);

        return $this->transform($soiltype, SoilTypeTransformer::class);
    }

    /**
     * @param GetAllSoilTypesRequest $request
     * @return array
     */
    public function getAllSoilTypes(GetAllSoilTypesRequest $request)
    {
        $soiltypes = Apiato::call('SoilType@GetAllSoilTypesAction', [$request]);

        return $this->transform($soiltypes, SoilTypeTransformer::class);
    }

    /**
     * @param UpdateSoilTypeRequest $request
     * @return array
     */
    public function updateSoilType(UpdateSoilTypeRequest $request)
    {
        $soiltype = Apiato::call('SoilType@UpdateSoilTypeAction', [$request]);

        return $this->transform($soiltype, SoilTypeTransformer::class);
    }

    /**
     * @param DeleteSoilTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSoilType(DeleteSoilTypeRequest $request)
    {
        Apiato::call('SoilType@DeleteSoilTypeAction', [$request]);

        return $this->noContent();
    }
}
