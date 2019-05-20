<?php

namespace App\Containers\SurveyStatus\Tasks;

use App\Containers\SurveyStatus\Data\Repositories\SurveyStatusRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteSurveyStatusTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSurveyStatusTask extends Task
{

    protected $repository;

    /**
     * DeleteSurveyStatusTask constructor.
     * @param SurveyStatusRepository $repository
     */
    public function __construct(SurveyStatusRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return int
     */
    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
