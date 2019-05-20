<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class SoilTypeO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SoilTypeO extends Model
{
    protected $connection = 'import';

    public $table = 'soiltype';
    public $primaryKey = 'soiltype_id';

    protected $fillable = [
        'soiltype_name',
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
    protected $resourceKey = 'soiltypes';

    //relations

}
