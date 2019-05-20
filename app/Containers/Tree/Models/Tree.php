<?php

namespace App\Containers\Tree\Models;

use App\Containers\Geo\Models\GeoPoint;
use App\Containers\Media\Models\Media;
use App\Containers\Species\Models\Species;
use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Models\Model;

/**
 * Class Tree
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Tree extends Model
{
    public $relationships = [
        'image',
        'species',
    ];

    protected $fillable = [
        'survey_id',
        'species_id',
        'dbh_cm',
        'height_m',
        'height_calculated',
        'health',
        'comment',
        'timestamp',
        'image_id',
        'point_id',
        'import_id',
        'identifier',
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

    protected $with = [
        'image',
        'species',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'trees';

    /**
     * use delete event to delete subentities
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($element) {
            //image
            optional($element->image)->deleteMedia();
            //point
            optional($element->point)->delete();
        });
    }

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function species()
    {
        return $this->belongsTo(Species::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

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
    public function image()
    {
        return $this->belongsTo(Media::class, 'image_id');
    }

    /**
     * @param $diameter
     * @return Float|null
     */
    public function estimateHeight($diameter): ?Float
    {
        if (is_null($diameter)) return null;

        return (1.3 + 31.028 * pow(1 - exp(-0.039 * $diameter), 0.854));
    }

    //accessors

    /**
     * @param $value
     * @return string|null
     */
    public function getTimestampAttribute($value)
    {
        Return $this->getIso8601Date($value);
    }
}
