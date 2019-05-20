<?php

namespace App\Containers\SurveyStatus\Tasks;

use App\Containers\SurveyStatus\Data\Repositories\SurveyStatusRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateSurveyStatusTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSurveyStatusTask extends Task
{

    protected $repository;

    /**
     * CreateSurveyStatusTask constructor.
     * @param SurveyStatusRepository $repository
     */
    public function __construct(SurveyStatusRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
