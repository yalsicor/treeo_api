<?php

namespace App\Containers\Media\Actions;

use App\Ship\Parents\Actions\SubAction;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

/**
 * Class CreateMediaSubAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateMediaSubAction extends SubAction
{
    /**
     * @param UploadedFile $mediafile
     * @param null $title
     * @param null $description
     * @param null $alt
     * @return mixed
     */
    public function run(UploadedFile $mediafile, $title = null, $description = null, $alt = null)
    {
        // save file to disk
        $path = Apiato::call('Media@SaveFileToDiskTask', [$mediafile, config('media.folder')]);

        //load image
        $image = Image::make(storage_path('app/'.$path));

        // save data to database
        $media = Apiato::call('Media@SaveFileDataToDatabaseTask', [[
            'title'         => $title,
            'file'          => pathinfo($path, PATHINFO_BASENAME),
            'path'          => $path,
            'ext'           => $mediafile->extension(),
            'description'   => $description,
            'alt'           => $alt,
            'filename'      => $mediafile->getClientOriginalName(),
            'width'         => $image->width(),
            'height'        => $image->height(),
        ]]);

        return $media;

    }
}
