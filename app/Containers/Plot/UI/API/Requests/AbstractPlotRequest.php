<?php

namespace App\Containers\Plot\UI\API\Requests;

use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Requests\Request;

/**
 * Class AbstractPlotRequest.
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
abstract class AbstractPlotRequest extends Request
{

    /**
     * @return bool
     */
    public function isOwner()
    {
        if ($this->id) {
            $plot = Plot::where('identifier' ,$this->id)->first();
            if ($plot) {
                return $plot->farmer->isOwner($this->user());
            }
        }
        return false;
    }
}
