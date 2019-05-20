<?php

namespace App\Containers\Media\Tasks;

use App\Containers\Media\Data\Repositories\MediaRepository;
use App\Containers\Media\Exceptions\MediaSaveToDatabaseFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\App;

class SaveFileDataToDatabaseTask extends Task
{

    public function __construct()
    {
        // ..
    }

    public function run($data)
    {
        try {
            $media = App::make(MediaRepository::class)->create($data);

        } catch (Exception $e) {
            throw $e;
//            throw (new MediaSaveToDatabaseFailedException())->debug($e);
        }

        return $media;
    }
}
