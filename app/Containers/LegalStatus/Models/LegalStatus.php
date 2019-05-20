<?php

namespace App\Containers\LegalStatus\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class LegalStatus
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class LegalStatus extends Model
{
    public $table = 'legal_status';

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
    protected $resourceKey = 'legalstatuses';
}
