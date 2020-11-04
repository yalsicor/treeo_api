<?php

namespace App\Containers\Survey\Models;

use App\Containers\Plot\Models\Plot;
use App\Containers\SurveyStatus\Models\SurveyStatus;
use App\Containers\Tree\Models\Tree;
use App\Ship\Parents\Models\Model;

/**
 * Class Survey
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Survey extends Model
{
    public $relationships = [
        'plot',
        'status',
        'trees',
    ];

    protected $fillable = [
        'date_start',
        'date_end',
        'date_import',
        'plot_id',
        'notes',
        'user_created',
        'status_id',
        'treecount',
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
        'date_start',
        'date_end',
        'date_import',
        'created_at',
        'updated_at',
    ];

    protected $with = [
        'status',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'surveys';

    /**
     * use delete event to delete subentities
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($element) {
            //trees
            foreach ($element->trees as $tree) {
                $tree->delete();
            }
        });
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('date_end', 'desc')->first();
    }

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plot()
    {
        return $this->belongsTo(Plot::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(SurveyStatus::class, 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trees()
    {
        return $this->hasMany(Tree::class);
    }

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
        Return $this->getIsoDatetime($value);
    }

    /**
     * @param $value
     * @return string|null
     */
    public function getDateImportAttribute($value)
    {
        Return $this->getIsoDatetime($value);
    }
}
