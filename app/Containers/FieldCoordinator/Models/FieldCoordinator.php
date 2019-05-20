<?php

namespace App\Containers\FieldCoordinator\Models;

use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Models\Model;

/**
 * Class FieldCoordinator
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FieldCoordinator extends Model
{
    public $table = 'field_coordinators';

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
    protected $resourceKey = 'fieldcoordinators';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plots()
    {
        return $this->hasMany(Plot::class);
    }

}
