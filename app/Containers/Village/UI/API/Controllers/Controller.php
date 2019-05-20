<?php

namespace App\Containers\Village\UI\API\Controllers;

use App\Containers\Village\UI\API\Requests\CreateVillageRequest;
use App\Containers\Village\UI\API\Requests\DeleteVillageRequest;
use App\Containers\Village\UI\API\Requests\GetAllVillagesRequest;
use App\Containers\Village\UI\API\Requests\FindVillageByIdRequest;
use App\Containers\Village\UI\API\Requests\UpdateVillageRequest;
use App\Containers\Village\UI\API\Transformers\VillageTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Village\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateVillageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createVillage(CreateVillageRequest $request)
    {
        $village = Apiato::call('Village@CreateVillageAction', [$request]);

        return $this->created($this->transform($village, VillageTransformer::class));
    }

    /**
     * @param FindVillageByIdRequest $request
     * @return array
     */
    public function findVillageById(FindVillageByIdRequest $request)
    {
        $village = Apiato::call('Village@FindVillageByIdAction', [$request]);

        return $this->transform($village, VillageTransformer::class);
    }

    /**
     * @param GetAllVillagesRequest $request
     * @return array
     */
    public function getAllVillages(GetAllVillagesRequest $request)
    {
        $villages = Apiato::call('Village@GetAllVillagesAction', [$request]);

        return $this->transform($villages, VillageTransformer::class);
    }

    /**
     * @param UpdateVillageRequest $request
     * @return array
     */
    public function updateVillage(UpdateVillageRequest $request)
    {
        $village = Apiato::call('Village@UpdateVillageAction', [$request]);

        return $this->transform($village, VillageTransformer::class);
    }

    /**
     * @param DeleteVillageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteVillage(DeleteVillageRequest $request)
    {
        Apiato::call('Village@DeleteVillageAction', [$request]);

        return $this->noContent();
    }
}
