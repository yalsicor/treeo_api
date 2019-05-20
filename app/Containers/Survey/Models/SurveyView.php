<?php

namespace App\Containers\Survey\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class SurveyView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyView extends Model
{
    public $table = 'surveys_view';

    protected $fillable = [
        'id',
        'date_start',
        'date_end',
        'plot_id',
        'farmer_id',
        'farmer_name',
        'project_name',
        'notes',
        'status_id',
        'created_at',
        'updated_at',
        'treecount',
        'dbh_mean',
        'height_mean',
        'tree_volume',
        'value_ird',
        'value_usd',
        'trees_per_ha',
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
        'date_start',
        'date_end',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'surveyviews';

    //relations

    //accessors

    /**
     * @param $value
     * @return string|null
     */
    public function getDateStartAttribute($value)
    {
        Return $this->getIsoDate($value);
    }

    /**
     * @param $value
     * @return string|null
     */
    public function getDateEndAttribute($value)
    {
        Return $this->getIsoDate($value);
    }

}
