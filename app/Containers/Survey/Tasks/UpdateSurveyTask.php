<?php

namespace App\Containers\Survey\Tasks;

use App\Containers\Survey\Data\Repositories\SurveyRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateSurveyTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSurveyTask extends Task
{

    protected $repository;

    /**
     * UpdateSurveyTask constructor.
     * @param SurveyRepository $repository
     */
    public function __construct(SurveyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
