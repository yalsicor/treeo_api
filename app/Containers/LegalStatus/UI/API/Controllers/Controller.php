<?php

namespace App\Containers\LegalStatus\UI\API\Controllers;

use App\Containers\LegalStatus\UI\API\Requests\CreateLegalStatusRequest;
use App\Containers\LegalStatus\UI\API\Requests\DeleteLegalStatusRequest;
use App\Containers\LegalStatus\UI\API\Requests\GetAllLegalStatusesRequest;
use App\Containers\LegalStatus\UI\API\Requests\FindLegalStatusByIdRequest;
use App\Containers\LegalStatus\UI\API\Requests\UpdateLegalStatusRequest;
use App\Containers\LegalStatus\UI\API\Transformers\LegalStatusTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\LegalStatus\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateLegalStatusRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createLegalStatus(CreateLegalStatusRequest $request)
    {
        $legalstatus = Apiato::call('LegalStatus@CreateLegalStatusAction', [$request]);

        return $this->created($this->transform($legalstatus, LegalStatusTransformer::class));
    }

    /**
     * @param FindLegalStatusByIdRequest $request
     * @return array
     */
    public function findLegalStatusById(FindLegalStatusByIdRequest $request)
    {
        $legalstatus = Apiato::call('LegalStatus@FindLegalStatusByIdAction', [$request]);

        return $this->transform($legalstatus, LegalStatusTransformer::class);
    }

    /**
     * @param GetAllLegalStatusesRequest $request
     * @return array
     */
    public function getAllLegalStatuses(GetAllLegalStatusesRequest $request)
    {
        $legalstatuses = Apiato::call('LegalStatus@GetAllLegalStatusesAction', [$request]);

        return $this->transform($legalstatuses, LegalStatusTransformer::class);
    }

    /**
     * @param UpdateLegalStatusRequest $request
     * @return array
     */
    public function updateLegalStatus(UpdateLegalStatusRequest $request)
    {
        $legalstatus = Apiato::call('LegalStatus@UpdateLegalStatusAction', [$request]);

        return $this->transform($legalstatus, LegalStatusTransformer::class);
    }

    /**
     * @param DeleteLegalStatusRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteLegalStatus(DeleteLegalStatusRequest $request)
    {
        Apiato::call('LegalStatus@DeleteLegalStatusAction', [$request]);

        return $this->noContent();
    }
}
