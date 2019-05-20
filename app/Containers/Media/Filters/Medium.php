<?php
/**
 * Class Medium
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */

namespace App\Containers\Media\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

/**
 * Class Medium
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Medium implements FilterInterface
{
    /**
     * @param Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->resize(500, 500, function($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        })->orientate();
    }
}