<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class SupporterO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SupporterO extends Model
{
    protected $connection = 'import';

    public $table = 'supporter';
    public $primaryKey = 'supporter_id';

    protected $fillable = [
        'name',
        'logofile',
        'path',
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
    protected $resourceKey = 'supporters';

    //relations

}
