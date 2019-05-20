<?php

namespace App\Containers\Supporter\Tasks;

use App\Containers\Supporter\Data\Repositories\SupporterRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteSupporterTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteSupporterTask extends Task
{

    protected $repository;

    /**
     * DeleteSupporterTask constructor.
     * @param SupporterRepository $repository
     */
    public function __construct(SupporterRepository $repository)
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
