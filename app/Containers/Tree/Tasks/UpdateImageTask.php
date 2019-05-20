<?php

namespace App\Containers\Tree\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Media\Models\Media;
use App\Containers\Tree\Models\Tree;
use App\Ship\Parents\Tasks\Task;

/**
 * Class UpdateImageTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateImageTask extends Task
{

    public function run($image, Tree $tree) :?Media
    {
        if ($image) {
            //save image
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $image,
                $tree->identifier,
            ]);

            $oldMedia = $tree->image;

            //set image
            $tree->image()->associate($media);
            $tree->save();

            //delete old image
            if ($oldMedia) Apiato::call('Media@DeleteMediaTask', [$oldMedia->id]);

            return $media;
        }
        return null;
    }
}
