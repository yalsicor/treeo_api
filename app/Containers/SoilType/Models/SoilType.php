<?php

namespace App\Containers\SoilType\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class SoilType
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SoilType extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'soiltypes';
}
