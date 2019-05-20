<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class VillageO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class VillageO extends Model
{
    protected $connection = 'import';

    public $table = 'village';
    public $primaryKey = 'v_id';

    protected $fillable = [
        'village_name',
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
    protected $resourceKey = 'villages';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function districtR()
    {
        return $this->belongsTo(DistrictO::class, 'district', 'district_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mus()
    {
        return $this->hasMany(MuO::class, 'village');
    }
}
