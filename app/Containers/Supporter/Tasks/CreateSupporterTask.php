<?php

namespace App\Containers\Supporter\Tasks;

use App\Containers\Supporter\Data\Repositories\SupporterRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateSupporterTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSupporterTask extends Task
{

    protected $repository;

    /**
     * CreateSupporterTask constructor.
     * @param SupporterRepository $repository
     */
    public function __construct(SupporterRepository $repository)
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
