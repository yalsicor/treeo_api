<?php

namespace App\Containers\Supporter\Tasks;

use App\Containers\Supporter\Data\Repositories\SupporterRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindSupporterByIdTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindSupporterByIdTask extends Task
{

    protected $repository;

    /**
     * FindSupporterByIdTask constructor.
     * @param SupporterRepository $repository
     */
    public function __construct(SupporterRepository $repository)
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
