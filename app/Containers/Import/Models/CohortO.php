<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class CohortO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CohortO extends Model
{
    protected $connection = 'import';

    public $table = 'cohort';
    public $primaryKey = 'cohort_id';

    protected $fillable = [
        'plantingdate',
        'species', //id
        'plantsplanted', //integer
        'mu', //id
        'season', //id
        'nursery', //id
        'plantsdelivered', //integer
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
    protected $resourceKey = 'cohorts';

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
    public function speciesR()
    {
        return $this->belongsTo(SpeciesO::class, 'species');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nurseryR()
    {
        return $this->belongsTo(NurseryO::class, 'nursery');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function treecounts()
    {
        return $this->hasMany(TreeCountO::class, 'cohort');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trees()
    {
        return $this->hasMany(TreeO::class, 'cohort');
    }

    //special
    public function survey()
    {}

}
