<?php
/**
 * Class Medium800
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */

namespace App\Containers\Media\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

/**
 * Class Medium800
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Medium800 implements FilterInterface
{
    /**
     * @param Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->resize(800, 800, function($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        })->orientate();
    }
}