<?php

namespace App\Containers\Geo\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PolygonRepository
 */
class PolygonRepository extends Repository
{

    /**
     * The Container Name.
	 * Must be set when the model has a different name than the container
	 */
    protected $container = 'Geo';

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'area_m2' => '=',
    ];

}
