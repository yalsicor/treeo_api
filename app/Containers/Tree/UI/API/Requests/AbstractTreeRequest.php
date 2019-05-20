<?php

namespace App\Containers\Tree\UI\API\Requests;

use App\Containers\Tree\Models\Tree;
use App\Ship\Parents\Requests\Request;

/**
 * Class AbstractTreeRequest
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
abstract class AbstractTreeRequest extends Request
{
    /**
     * @return bool
     */
    public function isOwner()
    {
        if ($this->id) {
            $tree = Tree::where(['identifier' => $this->id])->first();
            if ($tree) {
                $survey = $tree->survey;
                if ($survey) {
                    $plot = $survey->plot;
                    if ($plot) {
                        $farmer = $plot->farmer;
                        if ($farmer) return $farmer->isOwner($this->user());
                    }
                }
            }
        }
        return false;
    }
}
