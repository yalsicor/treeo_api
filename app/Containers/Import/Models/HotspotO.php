<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

/**
 * Class HotspotO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class HotspotO extends Model
{
    use PostgisTrait;

    protected $connection = 'import';

    public $table = 'hotspot';
    public $primaryKey = 'hotspot_id';

    protected $fillable = [
        'description', //text
        'point_geo', //geometry(Point, 4326)
        'name', //varchar
        'flickralbum', //vc
        'flickrphoto', //
        'name_en', //
        'name_ms', //
        'link_en', //
        'link_de', //
        'link_ms', //
    ];

    protected $postgisFields = [
        'point_geo',
    ];

    protected $postgisTypes = [
        'point_geo' => [
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
    protected $resourceKey = 'hotspots';

    //relations

}
