<?php

namespace App\Containers\SurveyStatus\Tasks;

use App\Containers\SurveyStatus\Data\Repositories\SurveyStatusRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateSurveyStatusTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSurveyStatusTask extends Task
{

    protected $repository;

    /**
     * UpdateSurveyStatusTask constructor.
     * @param SurveyStatusRepository $repository
     */
    public function __construct(SurveyStatusRepository $repository)
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
