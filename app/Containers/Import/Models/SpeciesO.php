<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class SpeciesO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SpeciesO extends Model
{
    protected $connection = 'import';

    public $table = 'species';
    public $primaryKey = 'species_id';

    protected $fillable = [
        'species_name',
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

    //relations

}
