<?php

namespace App\Containers\Media\Tasks;

use App\Containers\Media\Data\Repositories\MediaRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindDefaultMediaTask extends Task
{

    private $repository;

    public function __construct(MediaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($default)
    {
        try {
            return $this->repository->findWhere(['default' => $default])->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
