<?php

namespace App\Containers\Survey\Data\Criterias;

use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class PlotCriteria
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlotCriteria extends Criteria
{
    private $plot_id;

    /**
     * PlotCriteria constructor.
     * @param $plot_id
     */
    public function __construct($plot_id)
    {
        $this->plot_id = $plot_id;
    }

    /**
     * @param                                                   $model
     * @param \Prettus\Repository\Contracts\RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->where('plot_id', $this->plot_id);
    }
}
