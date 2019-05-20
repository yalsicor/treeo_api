<?php

namespace App\Containers\Species\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class Species
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Species extends Model
{
    public $table = 'species';

    protected $fillable = [
        'name',
        'latin_name',
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
    protected $resourceKey = 'species';
}
