<?php

namespace App\Containers\PlantingDistance\UI\API\Controllers;

use App\Containers\PlantingDistance\UI\API\Requests\CreatePlantingDistanceRequest;
use App\Containers\PlantingDistance\UI\API\Requests\DeletePlantingDistanceRequest;
use App\Containers\PlantingDistance\UI\API\Requests\GetAllPlantingDistancesRequest;
use App\Containers\PlantingDistance\UI\API\Requests\FindPlantingDistanceByIdRequest;
use App\Containers\PlantingDistance\UI\API\Requests\UpdatePlantingDistanceRequest;
use App\Containers\PlantingDistance\UI\API\Transformers\PlantingDistanceTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\PlantingDistance\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreatePlantingDistanceRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createPlantingDistance(CreatePlantingDistanceRequest $request)
    {
        $plantingdistance = Apiato::call('PlantingDistance@CreatePlantingDistanceAction', [$request]);

        return $this->created($this->transform($plantingdistance, PlantingDistanceTransformer::class));
    }

    /**
     * @param FindPlantingDistanceByIdRequest $request
     * @return array
     */
    public function findPlantingDistanceById(FindPlantingDistanceByIdRequest $request)
    {
        $plantingdistance = Apiato::call('PlantingDistance@FindPlantingDistanceByIdAction', [$request]);

        return $this->transform($plantingdistance, PlantingDistanceTransformer::class);
    }

    /**
     * @param GetAllPlantingDistancesRequest $request
     * @return array
     */
    public function getAllPlantingDistances(GetAllPlantingDistancesRequest $request)
    {
        $plantingdistances = Apiato::call('PlantingDistance@GetAllPlantingDistancesAction', [$request]);

        return $this->transform($plantingdistances, PlantingDistanceTransformer::class);
    }

    /**
     * @param UpdatePlantingDistanceRequest $request
     * @return array
     */
    public function updatePlantingDistance(UpdatePlantingDistanceRequest $request)
    {
        $plantingdistance = Apiato::call('PlantingDistance@UpdatePlantingDistanceAction', [$request]);

        return $this->transform($plantingdistance, PlantingDistanceTransformer::class);
    }

    /**
     * @param DeletePlantingDistanceRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deletePlantingDistance(DeletePlantingDistanceRequest $request)
    {
        Apiato::call('PlantingDistance@DeletePlantingDistanceAction', [$request]);

        return $this->noContent();
    }
}
