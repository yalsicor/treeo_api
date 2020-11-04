<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

/**
 * Class Import20190731
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Import20190731 extends Model
{
    use PostgisTrait;

    public $table = 'import_20190731';
    protected $connection = 'import';

    protected $fillable = [
        'id',
        'geom',
        'name',
        'village',
        'district',
        'plantingda',
    ];

    protected $postgisFields = [
        'geom',
    ];

    protected $postgisTypes = [
        'geom' => [
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
        'plantingda',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'import20190731s';

    //relations

}
