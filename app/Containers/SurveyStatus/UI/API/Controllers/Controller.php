<?php

namespace App\Containers\SurveyStatus\UI\API\Controllers;

use App\Containers\SurveyStatus\UI\API\Requests\CreateSurveyStatusRequest;
use App\Containers\SurveyStatus\UI\API\Requests\DeleteSurveyStatusRequest;
use App\Containers\SurveyStatus\UI\API\Requests\GetAllSurveyStatusesRequest;
use App\Containers\SurveyStatus\UI\API\Requests\FindSurveyStatusByIdRequest;
use App\Containers\SurveyStatus\UI\API\Requests\UpdateSurveyStatusRequest;
use App\Containers\SurveyStatus\UI\API\Transformers\SurveyStatusTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\SurveyStatus\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateSurveyStatusRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSurveyStatus(CreateSurveyStatusRequest $request)
    {
        $surveystatus = Apiato::call('SurveyStatus@CreateSurveyStatusAction', [$request]);

        return $this->created($this->transform($surveystatus, SurveyStatusTransformer::class));
    }

    /**
     * @param FindSurveyStatusByIdRequest $request
     * @return array
     */
    public function findSurveyStatusById(FindSurveyStatusByIdRequest $request)
    {
        $surveystatus = Apiato::call('SurveyStatus@FindSurveyStatusByIdAction', [$request]);

        return $this->transform($surveystatus, SurveyStatusTransformer::class);
    }

    /**
     * @param GetAllSurveyStatusesRequest $request
     * @return array
     */
    public function getAllSurveyStatuses(GetAllSurveyStatusesRequest $request)
    {
        $surveystatuses = Apiato::call('SurveyStatus@GetAllSurveyStatusesAction', [$request]);

        return $this->transform($surveystatuses, SurveyStatusTransformer::class);
    }

    /**
     * @param UpdateSurveyStatusRequest $request
     * @return array
     */
    public function updateSurveyStatus(UpdateSurveyStatusRequest $request)
    {
        $surveystatus = Apiato::call('SurveyStatus@UpdateSurveyStatusAction', [$request]);

        return $this->transform($surveystatus, SurveyStatusTransformer::class);
    }

    /**
     * @param DeleteSurveyStatusRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSurveyStatus(DeleteSurveyStatusRequest $request)
    {
        Apiato::call('SurveyStatus@DeleteSurveyStatusAction', [$request]);

        return $this->noContent();
    }
}
