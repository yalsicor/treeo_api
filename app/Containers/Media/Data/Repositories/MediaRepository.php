<?php

namespace App\Containers\Media\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class MediaRepository
 */
class MediaRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'    => '=',
        'title' => 'like',
        'path' => 'like',
        'ext' => 'like',
        'description' => 'like',
        'alt' => 'like',
        'filename' => 'like',
        'width' => '=',
        'height' => '=',
    ];

    public function boot()
    {
		parent::boot();
        // probably do some stuff here ...
    }
}
