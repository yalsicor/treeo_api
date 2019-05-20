<?php
/**
 * Class SmallSquare
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */

namespace App\Containers\Media\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

/**
 * Class SmallSquare
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SmallSquare implements FilterInterface
{
    /**
     * @param Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->fit(75, 75)->orientate();
    }
}