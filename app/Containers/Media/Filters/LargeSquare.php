<?php
/**
 * Class LargeSquare
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */

namespace App\Containers\Media\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

/**
 * Class LargeSquare
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class LargeSquare implements FilterInterface
{
    /**
     * @param Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->fit(150, 150)->orientate();
    }
}