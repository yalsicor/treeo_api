<?php

namespace App\Containers\Survey\UI\API\Controllers;

use App\Containers\Survey\UI\API\Requests\CreateSurveyRequest;
use App\Containers\Survey\UI\API\Requests\DeleteSurveyRequest;
use App\Containers\Survey\UI\API\Requests\FindSurveyByIdExtendedRequest;
use App\Containers\Survey\UI\API\Requests\GetAllSurveysRequest;
use App\Containers\Survey\UI\API\Requests\FindSurveyByIdRequest;
use App\Containers\Survey\UI\API\Requests\GetOwnSurveysRequest;
use App\Containers\Survey\UI\API\Requests\GetSurveyMapRequest;
use App\Containers\Survey\UI\API\Requests\GetSurveyViewRequest;
use App\Containers\Survey\UI\API\Requests\UpdateSurveyRequest;
use App\Containers\Survey\UI\API\Transformers\SurveyTransformer;
use App\Containers\Survey\UI\API\Transformers\SurveyViewTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Survey\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateSurveyRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSurvey(CreateSurveyRequest $request)
    {
        $survey = Apiato::call('Survey@CreateSurveyAction', [$request]);

        return $this->created($this->transform($survey, SurveyTransformer::class));
    }

    /**
     * @param FindSurveyByIdRequest $request
     * @return array
     */
    public function findSurveyById(FindSurveyByIdRequest $request)
    {
        $survey = Apiato::call('Survey@FindSurveyByIdAction', [$request]);

        return $this->transform($survey, SurveyTransformer::class);
    }

    /**
     * @param GetAllSurveysRequest $request
     * @return array
     */
    public function getAllSurveys(GetAllSurveysRequest $request)
    {
        $surveys = Apiato::call('Survey@GetAllSurveysAction', [$request]);

        return $this->transform($surveys, SurveyTransformer::class);
    }

    /**
     * @param GetSurveyViewRequest $request
     * @return array
     */
    public function getSurveyView(GetSurveyViewRequest $request)
    {
        $surveys = Apiato::call('Survey@GetSurveyViewAction', [$request]);

        return $this->transform($surveys, SurveyViewTransformer::class);
    }

    /**
     * @param UpdateSurveyRequest $request
     * @return array
     */
    public function updateSurvey(UpdateSurveyRequest $request)
    {
        $survey = Apiato::call('Survey@UpdateSurveyAction', [$request]);

        return $this->transform($survey, SurveyTransformer::class);
    }

    /**
     * @param DeleteSurveyRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSurvey(DeleteSurveyRequest $request)
    {
        Apiato::call('Survey@DeleteSurveyAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param FindSurveyByIdExtendedRequest $request
     * @return array
     */
    public function findSurveyByIdExtended(FindSurveyByIdExtendedRequest $request)
    {
        $survey = Apiato::call('Survey@FindSurveyByIdExtendedAction', [$request]);

        return $this->transform($survey, SurveyViewTransformer::class);
    }

    /**
     * @param GetOwnSurveysRequest $request
     * @return array
     */
    public function getOwnSurveys(GetOwnSurveysRequest $request)
    {
        $surveys = Apiato::call('Survey@GetOwnSurveysAction', [$request]);

        return $this->transform($surveys, SurveyTransformer::class);
    }

    /**
     * @param GetSurveyMapRequest $request
     * @return mixed
     */
    public function getSurveyMap(GetSurveyMapRequest $request)
    {
        return Apiato::call('Survey@GetSurveyMapAction', [$request]);
    }

    /**
     * @param GetAllSurveysRequest $request
     * @return mixed
     */
    public function getAllSurveysCsv(GetAllSurveysRequest $request)
    {
        return Apiato::call('Survey@GetAllSurveysCsvAction', [$request]);
    }
}
