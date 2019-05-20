<?php

namespace App\Containers\District\Models;

use App\Containers\Viallage\Models\Village;
use App\Ship\Parents\Models\Model;

/**
 * Class District
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class District extends Model
{
    protected $fillable = [
        'name',
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
    protected $resourceKey = 'districts';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function villages()
    {
        return $this->hasMany(Village::class);
    }
}
