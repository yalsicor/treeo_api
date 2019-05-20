<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class RegionO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class RegionO extends Model
{
    protected $connection = 'import';

    public $table = 'regions';
    public $primaryKey = 'gid';

    protected $fillable = [
        'id', //integer
        'name',
        'the_geom', //geometry(Polygon)
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
    protected $resourceKey = 'regions';

    //relations

}
