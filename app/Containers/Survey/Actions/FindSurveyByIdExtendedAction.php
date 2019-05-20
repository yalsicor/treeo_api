<?php

namespace App\Containers\Survey\Actions;

use App\Containers\Survey\Data\Repositories\SurveyViewRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Exception;

/**
 * Class FindSurveyByIdExtendedAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSurveyByIdExtendedAction extends Action
{
    /**
     * @var SurveyViewRepository
     */
    private $repository;

    public function __construct(SurveyViewRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        try {
            return $this->repository->findWhere(['identifier' => $request->id])->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
