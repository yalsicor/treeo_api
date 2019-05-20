<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class PlantingdistanceO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlantingdistanceO extends Model
{
    protected $connection = 'import';

    public $table = 'plantingdistance';
    public $primaryKey = 'plantingdistance_id';

    protected $fillable = [
        'plantingdistance_name',
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
    protected $resourceKey = 'plantingdistances';

    //relations

}
