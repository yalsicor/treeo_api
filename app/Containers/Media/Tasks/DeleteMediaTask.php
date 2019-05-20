<?php

namespace App\Containers\Media\Tasks;

use App\Containers\Media\Data\Repositories\MediaRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteMediaTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DeleteMediaTask extends Task
{

    protected $repository;

    /**
     * DeleteMediaTask constructor.
     * @param MediaRepository $repository
     */
    public function __construct(MediaRepository $repository)
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
            //delete file
            $media = $this->repository->find($id);
            unlink(storage_path('app/'.$media->path));
            //delete db entry
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
