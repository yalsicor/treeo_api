<?php

namespace App\Containers\Project\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class Project
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Project extends Model
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
    protected $resourceKey = 'projects';
}
