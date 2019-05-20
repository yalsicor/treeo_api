<?php

namespace App\Containers\Species\UI\API\Controllers;

use App\Containers\Species\UI\API\Requests\CreateSpeciesRequest;
use App\Containers\Species\UI\API\Requests\DeleteSpeciesRequest;
use App\Containers\Species\UI\API\Requests\GetAllSpeciesRequest;
use App\Containers\Species\UI\API\Requests\FindSpeciesByIdRequest;
use App\Containers\Species\UI\API\Requests\UpdateSpeciesRequest;
use App\Containers\Species\UI\API\Transformers\SpeciesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Species\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateSpeciesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSpecies(CreateSpeciesRequest $request)
    {
        $species = Apiato::call('Species@CreateSpeciesAction', [$request]);

        return $this->created($this->transform($species, SpeciesTransformer::class));
    }

    /**
     * @param FindSpeciesByIdRequest $request
     * @return array
     */
    public function findSpeciesById(FindSpeciesByIdRequest $request)
    {
        $species = Apiato::call('Species@FindSpeciesByIdAction', [$request]);

        return $this->transform($species, SpeciesTransformer::class);
    }

    /**
     * @param GetAllSpeciesRequest $request
     * @return array
     */
    public function getAllSpecies(GetAllSpeciesRequest $request)
    {
        $species = Apiato::call('Species@GetAllSpeciesAction', [$request]);

        return $this->transform($species, SpeciesTransformer::class);
    }

    /**
     * @param UpdateSpeciesRequest $request
     * @return array
     */
    public function updateSpecies(UpdateSpeciesRequest $request)
    {
        $species = Apiato::call('Species@UpdateSpeciesAction', [$request]);

        return $this->transform($species, SpeciesTransformer::class);
    }

    /**
     * @param DeleteSpeciesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSpecies(DeleteSpeciesRequest $request)
    {
        Apiato::call('Species@DeleteSpeciesAction', [$request]);

        return $this->noContent();
    }
}
