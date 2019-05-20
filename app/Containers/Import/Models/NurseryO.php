<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

/**
 * Class NurseryO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class NurseryO extends Model
{
    use PostgisTrait;

    protected $connection = 'import';

    public $table = 'nursery';
    public $primaryKey = 'nursery_id';

    protected $fillable = [
        'owner', //
        'teammembers', //
        'adress', //
        'area_m2', //
        'capacity', //
        'establishing_date', //date
        'flickralbum', //
        'point_geo', //geometry(Point, 4326)
        'flickrcoverphoto', //
    ];

    protected $postgisFields = [
        'point_geo',
    ];

    protected $postgisTypes = [
        'point_geo' => [
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
    protected $resourceKey = 'nurseries';

    //relations

}
