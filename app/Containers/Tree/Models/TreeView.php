<?php

namespace App\Containers\Tree\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class TreeView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class TreeView extends Model
{
    public $table = 'trees_view';

    protected $fillable = [
        'survey_id',
        'species_id',
        'dbh_cm',
        'height_m',
        'height_calculated',
        'health',
        'comment',
        'identifier',
        'point_id',
        'timestamp',
        'image_id',
        'import_id',
        'created_at',
        'updated_at',
        'image',
        'species',
        'volume',
        'plot_id',
        'farmer_id',
        'farmer_name',
        'project_name',
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
        'timestamp',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'treeviews';

    //relations

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
