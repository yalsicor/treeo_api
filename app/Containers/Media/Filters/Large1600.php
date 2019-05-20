<?php
/**
 * Class Large1600
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */

namespace App\Containers\Media\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

/**
 * Class Large1600
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Large1600 implements FilterInterface
{
    /**
     * @param Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->resize(1600, 1600, function($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        })->orientate();
    }
}