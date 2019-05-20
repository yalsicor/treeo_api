<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

/**
 * Class PolygonO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PolygonO extends Model
{
    use PostgisTrait;

    protected $connection = 'import';

    public $table = 'polygon';
    public $primaryKey = 'polygon_id';

    protected $fillable = [
        'polygon_geo', //geometry(MultiPolygon, 4326)
        'import_id',
    ];

    protected $postgisFields = [
        'polygon_geo',
    ];

    protected $postgisTypes = [
        'polygon_geo' => [
            'geomtype' => 'geometry',
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
    protected $resourceKey = 'polygons';

    //relations

}
