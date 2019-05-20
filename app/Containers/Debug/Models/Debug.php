<?php

namespace App\Containers\Debug\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class Debug
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Debug extends Model
{
    protected $fillable = [
        'timestamp',
        'data',
        'user_id',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'timestamp',
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'debugs';

    //accessors

    /**
     * @param $value
     * @return string|null
     */
    public function getTimestampAttribute($value)
    {
        Return $this->getIso8601Date($value);
    }

    //relations

}
