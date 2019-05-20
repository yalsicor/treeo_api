<?php

namespace App\Containers\Survey\Tasks;

use App\Containers\Survey\Data\Repositories\SurveyRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteSurveyTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSurveyTask extends Task
{

    protected $repository;

    /**
     * DeleteSurveyTask constructor.
     * @param SurveyRepository $repository
     */
    public function __construct(SurveyRepository $repository)
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
