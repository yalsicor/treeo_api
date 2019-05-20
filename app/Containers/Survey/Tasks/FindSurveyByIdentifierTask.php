<?php

namespace App\Containers\Survey\Tasks;

use App\Containers\Survey\Data\Repositories\SurveyRepository;
use App\Containers\Survey\Models\Survey;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindSurveyByIdentifierTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSurveyByIdentifierTask extends Task
{

    protected $repository;

    /**
     * FindSurveyByIdentifierTask constructor.
     * @param SurveyRepository $repository
     */
    public function __construct(SurveyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return Survey
     */
    public function run($id) : Survey
    {
        try {
            return $this->repository->findWhere(['identifier' => $id])->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
