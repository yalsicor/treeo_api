<?php

namespace App\Containers\Hotspot\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class HotspotRepository
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class HotspotRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'description',
        'point_id',
        'photo_id',
        'name_de',
        'name_en',
        'name_ms',
        'link_de',
        'link_en',
        'link_ms',
    ];

}
