<?php

namespace App\Containers\Plot\Models;

use App\Containers\District\Models\District;
use App\Containers\Farmer\Models\Farmer;
use App\Containers\FieldCoordinator\Models\FieldCoordinator;
use App\Containers\Geo\Models\GeoPoint;
use App\Containers\Geo\Models\Polygon;
use App\Containers\LegalStatus\Models\LegalStatus;
use App\Containers\Media\Models\Media;
use App\Containers\Nursery\Models\Nursery;
use App\Containers\PlantingDistance\Models\PlantingDistance;
use App\Containers\SoilType\Models\SoilType;
use App\Containers\Species\Models\Species;
use App\Containers\Supporter\Models\Supporter;
use App\Containers\Survey\Models\Survey;
use App\Containers\Village\Models\Village;
use App\Ship\Parents\Models\Model;

/**
 * Class Plot
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Plot extends Model
{
    public $relationships = [
        'album',
        'nursery',
        'farmer',
        'polygon',
        'point',
        'planting_distance',
        'legal_status',
        'soil_type',
        'species',
        'village',
        'supporter',
        'surveys',
        'last_survey',
        'field_coordinator',
        'calculated_polygon',
    ];

    protected $hashLength = 4;

    protected $fillable = [
        'farmer_id',
        'polygon_id',
        'species_id',
        'soil_type_id',
        'legal_status_id',
        'village_id',
        'point_id',
        'planting_distance_id',
        'supporter_id',
        'nursery_id',
        'identifier',
        'planting_date',
        'video_url',
        'neighbors',
        'landscape_features',
        'general_conditions',
        'fire_fighting',
        'active',
        'sample',
        'plants_planted',
        'import_id',
        'field_coordinator_id',
        'flickr_album',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'planting_date',
        'created_at',
        'updated_at',
    ];

    protected $with = [
        'farmer',
    ];

    protected $withCount = [
        'surveys',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'plots';

    /**
     * use delete event to delete subentities
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($element) {
            //surveys
            foreach ($element->surveys as $survey) {
                $survey->delete();
            }
            //album media
            foreach ($element->album as $media) $media->deleteMedia();
            //polygon
            optional($element->polygon)->delete();
            //point
            optional($element->point)->delete();
        });
    }

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function polygon()
    {
        return $this->belongsTo(Polygon::class);
    }

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
    public function soil_type()
    {
        return $this->belongsTo(SoilType::class, 'soil_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function legal_status()
    {
        return $this->belongsTo(LegalStatus::class, 'legal_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function village()
    {
        return $this->belongsTo(Village::class);
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
    public function planting_distance()
    {
        return $this->belongsTo(PlantingDistance::class, 'planting_distance_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supporter()
    {
        return $this->belongsTo(Supporter::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nursery()
    {
        return $this->belongsTo(Nursery::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne|\Illuminate\Database\Query\Builder
     */
    public function last_survey()
    {
        return $this->hasOne(Survey::class)->latest();
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function field_coordinator()
    {
        return $this->belongsTo(FieldCoordinator::class);
    }

    //accessors

    /**
     * @param $value
     * @return string|null
     */
    public function getPlantingDateAttribute($value)
    {
        Return $this->getIsoDate($value);
    }

}
