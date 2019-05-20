<?php
/**
 * Class Small320
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */

namespace App\Containers\Media\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

/**
 * Class Small320
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Small320 implements FilterInterface
{
    /**
     * @param Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->resize(320, 320, function($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        })->orientate();
    }
}