<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class DistrictO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DistrictO extends Model
{
    protected $connection = 'import';

    public $table = 'district';
    public $primaryKey = 'district_id';

    protected $fillable = [
        'district_name',
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
    protected $resourceKey = 'districts';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function villages()
    {
        return $this->hasMany(VillageO::class, 'district');
    }
}
