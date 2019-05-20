<?php

namespace App\Containers\Nursery\Models;

use App\Containers\Geo\Models\GeoPoint;
use App\Containers\Media\Models\Media;
use App\Ship\Parents\Models\Model;

/**
 * Class Nursery
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Nursery extends Model
{

    public $relationships = [
        'album',
    ];

    protected $fillable = [
        'owner',
        'point_id',
        'cover_id',
        'flickr_album',
        'flickr_photo',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $with = [
        'cover',
        'album',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'nurseries';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function point()
    {
        return $this->belongsTo(GeoPoint::class, 'point_id');
    }

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
    public function cover()
    {
        return $this->belongsTo(Media::class, 'cover_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function album()
    {
        return $this->morphToMany(Media::class, 'imageable')
            ->as('album')
            ->withPivot(['caption', 'order'])
            ->withTimestamps()
            ->orderBy('imageables.order');
    }
}
