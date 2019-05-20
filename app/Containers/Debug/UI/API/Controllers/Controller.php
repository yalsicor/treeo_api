<?php

namespace App\Containers\Debug\UI\API\Controllers;

use App\Containers\Debug\UI\API\Requests\CreateDebugRequest;
use App\Containers\Debug\UI\API\Requests\DeleteDebugRequest;
use App\Containers\Debug\UI\API\Requests\GetAllDebugsRequest;
use App\Containers\Debug\UI\API\Requests\FindDebugByIdRequest;
use App\Containers\Debug\UI\API\Requests\UpdateDebugRequest;
use App\Containers\Debug\UI\API\Transformers\DebugTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Debug\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateDebugRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createDebug(CreateDebugRequest $request)
    {
        $debug = Apiato::call('Debug@CreateDebugAction', [$request]);

        return $this->created($this->transform($debug, DebugTransformer::class));
    }

    /**
     * @param FindDebugByIdRequest $request
     * @return array
     */
    public function findDebugById(FindDebugByIdRequest $request)
    {
        $debug = Apiato::call('Debug@FindDebugByIdAction', [$request]);

        return $this->transform($debug, DebugTransformer::class);
    }

    /**
     * @param GetAllDebugsRequest $request
     * @return array
     */
    public function getAllDebugs(GetAllDebugsRequest $request)
    {
        $debugs = Apiato::call('Debug@GetAllDebugsAction', [$request]);

        return $this->transform($debugs, DebugTransformer::class);
    }

    /**
     * @param UpdateDebugRequest $request
     * @return array
     */
    public function updateDebug(UpdateDebugRequest $request)
    {
        $debug = Apiato::call('Debug@UpdateDebugAction', [$request]);

        return $this->transform($debug, DebugTransformer::class);
    }

    /**
     * @param DeleteDebugRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDebug(DeleteDebugRequest $request)
    {
        Apiato::call('Debug@DeleteDebugAction', [$request]);

        return $this->noContent();
    }
}
