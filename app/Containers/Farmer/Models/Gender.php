<?php

namespace App\Containers\Farmer\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class Gender
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Gender extends Model
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
    protected $resourceKey = 'genders';

    /**
     * relations
     */
}
