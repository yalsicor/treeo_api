<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class LegalO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class LegalO extends Model
{
    protected $connection = 'import';

    public $table = 'legal';
    public $primaryKey = 'legal_id';

    protected $fillable = [
        'legal_status',
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
    protected $resourceKey = 'legals';

    //relations

}
