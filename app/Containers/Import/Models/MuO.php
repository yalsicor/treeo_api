<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class MuO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class MuO extends Model
{
    protected $connection = 'import';

    public $table = 'mu';
    public $primaryKey = 'mu_id';

    protected $fillable = [

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
    protected $resourceKey = 'mus';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function smallholderR()
    {
        return $this->belongsTo(SmallholderO::class, 'smallholder');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function polygonR()
    {
        return $this->belongsTo(PolygonO::class, 'polygon');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function legalStatusR()
    {
        return $this->belongsTo(LegalO::class, 'legal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function villageR()
    {
        return $this->belongsTo(VillageO::class, 'village');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supporterR()
    {
        return $this->belongsTo(SupporterO::class, 'supporter');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cohorts()
    {
        return $this->hasMany(CohortO::class, 'mu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveys()
    {
        return $this->hasMany(SurveyO::class, 'mu');
    }

}
