<?php

namespace App\Containers\Supporter\Models;

use App\Containers\Media\Models\Media;
use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Models\Model;

/**
 * Class Supporter
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Supporter extends Model
{
    protected $fillable = [
        'name',
        'path',
        'logo_id',
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
        'logo',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'supporters';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plots()
    {
        return $this->hasMany(Plot::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function logo()
    {
        return $this->belongsTo(Media::class, 'logo_id');
    }
}
