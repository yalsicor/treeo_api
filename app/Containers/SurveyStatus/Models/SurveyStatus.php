<?php

namespace App\Containers\SurveyStatus\Models;

use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Models\Model;

/**
 * Class SurveyStatus
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SurveyStatus extends Model
{
    public $table = 'survey_status';

    protected $fillable = [
        'name',
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
    protected $resourceKey = 'surveystatuses';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}
