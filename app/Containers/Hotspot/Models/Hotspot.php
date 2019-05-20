<?php

namespace App\Containers\Hotspot\Models;

use App\Containers\Geo\Models\GeoPoint;
use App\Containers\Media\Models\Media;
use App\Ship\Parents\Models\Model;

/**
 * Class Hotspot
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Hotspot extends Model
{
    public $relationships = [
        'album',
    ];

    protected $fillable = [
        'description',
        'point_id',
        'photo_id',
        'name_de',
        'name_en',
        'name_ms',
        'link_de',
        'link_en',
        'link_ms',
        'flickr_album',
        'flickr_photo',
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
        'photo',
        'album',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'hotspots';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function point()
    {
        return $this->belongsTo(GeoPoint::class, 'point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo()
    {
        return $this->belongsTo(Media::class, 'photo_id');
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
