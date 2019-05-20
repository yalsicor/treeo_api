<?php

namespace App\Containers\Nursery\UI\API\Controllers;

use App\Containers\Media\UI\API\Transformers\MediaTransformer;
use App\Containers\Nursery\UI\API\Requests\ChangeNurseryCoverRequest;
use App\Containers\Nursery\UI\API\Requests\CreateNurseryRequest;
use App\Containers\Nursery\UI\API\Requests\DeleteNurseryRequest;
use App\Containers\Nursery\UI\API\Requests\GetAllNurseriesRequest;
use App\Containers\Nursery\UI\API\Requests\FindNurseryByIdRequest;
use App\Containers\Nursery\UI\API\Requests\GetNurseriesForWebmapRequest;
use App\Containers\Nursery\UI\API\Requests\UpdateNurseryRequest;
use App\Containers\Nursery\UI\API\Transformers\NurseryTransformer;
use App\Containers\Nursery\UI\API\Transformers\NurseryWebmapTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Nursery\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateNurseryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createNursery(CreateNurseryRequest $request)
    {
        $nursery = Apiato::call('Nursery@CreateNurseryAction', [$request]);

        return $this->created($this->transform($nursery, NurseryTransformer::class));
    }

    /**
     * @param FindNurseryByIdRequest $request
     * @return array
     */
    public function findNurseryById(FindNurseryByIdRequest $request)
    {
        $nursery = Apiato::call('Nursery@FindNurseryByIdAction', [$request]);

        return $this->transform($nursery, NurseryTransformer::class);
    }

    /**
     * @param GetAllNurseriesRequest $request
     * @return array
     */
    public function getAllNurseries(GetAllNurseriesRequest $request)
    {
        $nurseries = Apiato::call('Nursery@GetAllNurseriesAction', [$request]);

        return $this->transform($nurseries, NurseryTransformer::class);
    }

    /**
     * @param UpdateNurseryRequest $request
     * @return array
     */
    public function updateNursery(UpdateNurseryRequest $request)
    {
        $nursery = Apiato::call('Nursery@UpdateNurseryAction', [$request]);

        return $this->transform($nursery, NurseryTransformer::class);
    }

    /**
     * @param DeleteNurseryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteNursery(DeleteNurseryRequest $request)
    {
        Apiato::call('Nursery@DeleteNurseryAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param ChangeNurseryCoverRequest $request
     * @return array
     */
    public function changeNurseryCover(ChangeNurseryCoverRequest $request)
    {
        $photo = Apiato::call('Nursery@ChangeNurseryCoverAction', [$request]);

        return $this->transform($photo, MediaTransformer::class);
    }

    /**
     * @param GetNurseriesForWebmapRequest $request
     * @return array
     */
    public function getNurseriesForWebmap(GetNurseriesForWebmapRequest $request)
    {
        $nurseries = Apiato::call('Nursery@GetAllNurseriesAction', [$request]);

        return $this->transform($nurseries, NurseryWebmapTransformer::class);
    }
}
