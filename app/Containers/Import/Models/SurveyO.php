<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class SurveyO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyO extends Model
{
    protected $connection = 'import';

    public $table = 'survey';
    public $primaryKey = 'survey_id';

    protected $fillable = [
        'date', //
        'mu', //
        'created_on', //timestamp
        'notes', //
        'user_creat', //varchar(80)
        'pruning', //integer
        'soiltype', //integer
        'undergrowt', //integer
        'distance', //integer
        'import_date', //timestamp
        'amigo_id', //varchar(80)
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

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'surveys';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function muR()
    {
        return $this->belongsTo(MuO::class, 'mu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function soilTypeR()
    {
        return $this->belongsTo(SoilTypeO::class, 'soiltype');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function treecounts()
    {
        return $this->hasMany(TreeCountO::class, 'survey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plantingDistanceR()
    {
        return $this->belongsTo(PlantingdistanceO::class, 'distance');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trees()
    {
        return $this->hasMany(TreeO::class, 'survey');
    }

    public function cohort()
    {}

}
