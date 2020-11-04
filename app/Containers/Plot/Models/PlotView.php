<?php

namespace App\Containers\Plot\Models;

use App\Containers\Farmer\Models\Farmer;
use App\Containers\Media\Models\Media;
use App\Containers\Supporter\Models\Supporter;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Class PlotView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlotView extends Model
{
    public $table = 'plots_view';

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
        'planting_date',
        'video_url',
        'identifier',
        'neighbors',
        'landscape_features',
        'general_conditions',
        'fire_fighting',
        'active',
        'sample',
        'plants_planted',
        'import_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'farmer',
        'project',
        'area_m2',
        'species',
        'survey_count',
        'latest_survey_treecount',
        'latest_survey_date',
        'latest_survey_dbh_mean',
        'latest_survey_height_mean',
        'trees_per_ha',
        'latest_survey_tree_volume',
        'latest_survey_value_ird',
        'latest_survey_value_usd',
        'soil_type',
        'legal_status',
        'village',
        'district',
        'planting_distance',
        'supporter',
        'nursery',
        'field_coordinator',
    ];
    
    public $relationships = [
        'album',
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
        'planting_date',
        'latest_survey_date',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'plotviews';

    //relations

    /**
     * @return MorphToMany
     */
    public function album()
    {
      return $this->morphToMany(Media::class, 'imageable')
        ->as('album')
        ->withPivot(['caption', 'order'])
        ->withTimestamps()
        ->orderBy('imageables.order');
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

    /**
     * @param $value
     * @return string|null
     */
    public function getLatestSurveyDateAttribute($value)
    {
        Return $this->getIsoDate($value);
    }

}
