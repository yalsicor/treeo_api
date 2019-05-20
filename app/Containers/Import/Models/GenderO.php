<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class GenderO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GenderO extends Model
{
    protected $connection = 'import';

    public $table = 'gender';
    public $primaryKey = 'gender_id';

    protected $fillable = [
        'gender',
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
    protected $resourceKey = 'genders';

    //relations

}
