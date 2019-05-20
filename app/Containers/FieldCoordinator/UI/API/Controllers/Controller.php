<?php

namespace App\Containers\FieldCoordinator\UI\API\Controllers;

use App\Containers\FieldCoordinator\UI\API\Requests\CreateFieldCoordinatorRequest;
use App\Containers\FieldCoordinator\UI\API\Requests\DeleteFieldCoordinatorRequest;
use App\Containers\FieldCoordinator\UI\API\Requests\GetAllFieldCoordinatorsRequest;
use App\Containers\FieldCoordinator\UI\API\Requests\FindFieldCoordinatorByIdRequest;
use App\Containers\FieldCoordinator\UI\API\Requests\UpdateFieldCoordinatorRequest;
use App\Containers\FieldCoordinator\UI\API\Transformers\FieldCoordinatorTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\FieldCoordinator\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateFieldCoordinatorRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createFieldCoordinator(CreateFieldCoordinatorRequest $request)
    {
        $fieldcoordinator = Apiato::call('FieldCoordinator@CreateFieldCoordinatorAction', [$request]);

        return $this->created($this->transform($fieldcoordinator, FieldCoordinatorTransformer::class));
    }

    /**
     * @param FindFieldCoordinatorByIdRequest $request
     * @return array
     */
    public function findFieldCoordinatorById(FindFieldCoordinatorByIdRequest $request)
    {
        $fieldcoordinator = Apiato::call('FieldCoordinator@FindFieldCoordinatorByIdAction', [$request]);

        return $this->transform($fieldcoordinator, FieldCoordinatorTransformer::class);
    }

    /**
     * @param GetAllFieldCoordinatorsRequest $request
     * @return array
     */
    public function getAllFieldCoordinators(GetAllFieldCoordinatorsRequest $request)
    {
        $fieldcoordinators = Apiato::call('FieldCoordinator@GetAllFieldCoordinatorsAction', [$request]);

        return $this->transform($fieldcoordinators, FieldCoordinatorTransformer::class);
    }

    /**
     * @param UpdateFieldCoordinatorRequest $request
     * @return array
     */
    public function updateFieldCoordinator(UpdateFieldCoordinatorRequest $request)
    {
        $fieldcoordinator = Apiato::call('FieldCoordinator@UpdateFieldCoordinatorAction', [$request]);

        return $this->transform($fieldcoordinator, FieldCoordinatorTransformer::class);
    }

    /**
     * @param DeleteFieldCoordinatorRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteFieldCoordinator(DeleteFieldCoordinatorRequest $request)
    {
        Apiato::call('FieldCoordinator@DeleteFieldCoordinatorAction', [$request]);

        return $this->noContent();
    }
}
