<?php

namespace App\Containers\SurveyStatus\Tasks;

use App\Containers\SurveyStatus\Data\Repositories\SurveyStatusRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindSurveyStatusByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSurveyStatusByIdTask extends Task
{

    protected $repository;

    /**
     * FindSurveyStatusByIdTask constructor.
     * @param SurveyStatusRepository $repository
     */
    public function __construct(SurveyStatusRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
