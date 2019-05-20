<?php

namespace App\Containers\Media\Tasks;

use App\Containers\Media\Exceptions\MediaSaveToDiskFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Http\UploadedFile;

class SaveFileToDiskTask extends Task
{

    public function __construct()
    {
        // ..
    }

    /**
     * @param UploadedFile $file
     * @param null $directory
     * @return false|string
     */
    public function run(UploadedFile $file, $directory = null)
    {
        try {
            $path = $file->store($directory);

        } catch (Exception $e) {
            throw (new MediaSaveToDiskFailedException())->debug($e);
        }

        return $path;
    }
}
