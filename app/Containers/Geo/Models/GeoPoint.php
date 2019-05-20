<?php

namespace App\Containers\Geo\Models;

use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

class GeoPoint extends Model
{

    use PostgisTrait;
//    use SoftDeletes;

    protected $table = 'geo_points';

    protected $fillable = [
        'point',
        'accuracy',

        'created_at',
        'updated_at',
    ];

    protected $postgisFields = [
        'point',
    ];

    protected $postgisTypes = [
        'point' => [
            'geomtype' => 'geography',
            'srid' => 4326,
        ],
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
    protected $resourceKey = 'geopoints';
}
