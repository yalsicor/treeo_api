<?php

namespace App\Containers\Supporter\Tasks;

use App\Containers\Supporter\Data\Repositories\SupporterRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateSupporterTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSupporterTask extends Task
{

    protected $repository;

    /**
     * UpdateSupporterTask constructor.
     * @param SupporterRepository $repository
     */
    public function __construct(SupporterRepository $repository)
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
