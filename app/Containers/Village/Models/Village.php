<?php

namespace App\Containers\Village\Models;

use App\Containers\District\Models\District;
use App\Ship\Parents\Models\Model;

/**
 * Class Village
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Village extends Model
{
    protected $fillable = [
        'name',
        'district_id',
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

    protected $with = [
        'district',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'villages';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
