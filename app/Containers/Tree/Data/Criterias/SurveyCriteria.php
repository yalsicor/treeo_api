<?php

namespace App\Containers\Tree\Data\Criterias;

use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class SurveyCriteria
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyCriteria extends Criteria
{
    private $survey_id;

    /**
     * SurveyCriteria constructor.
     * @param $survey_id
     */
    public function __construct($survey_id)
    {
        $this->survey_id = $survey_id;
    }

    /**
     * @param                                                   $model
     * @param \Prettus\Repository\Contracts\RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->where('survey_id', $this->survey_id);
    }
}
