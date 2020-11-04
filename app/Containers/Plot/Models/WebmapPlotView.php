<?php

namespace App\Containers\Plot\Models;

use App\Containers\Farmer\Models\FarmerView;
use App\Containers\Media\Models\Media;
use App\Containers\Supporter\Models\Supporter;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

/**
 * Class WebmapPlotView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class WebmapPlotView extends Model
{
    use PostgisTrait;

    public $table = 'webmap_plot_view';

    protected $fillable = [
        'id',
        'mu_id',
        'point_geo',
        'smallholder',
        'sh_name',
        'photo',
        'videourl',
        'story',
        'date',
        'plantingdate',
        'speciesmix',
        'mittelwertvondbh_cm_r',
        'mittelwertvonheight_m_r',
        'st_area_r',
        'treecount',
        'name',
        'path',
        'logofile',
        'sample',
    ];

    public $relationships = [
        'album',
    ];

    protected $postgisFields = [
        'point_geo',
    ];

    protected $postgisTypes = [
        'point_geo' => [
            'geomtype' => 'geography',
            'srid' => 4326,
        ],
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'webmapplotviews';

    /**
     * Override getMorphClass function to get the album morph objects
     *
     * @return string
     */
    public function getMorphClass()
    {
        return 'App\Containers\Plot\Models\Plot';
    }

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
