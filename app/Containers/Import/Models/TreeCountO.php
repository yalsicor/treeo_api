<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class TreeCountO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class TreeCountO extends Model
{
    protected $connection = 'import';

    public $table = 'treecount';
    public $primaryKey = 'treecount_id';

    protected $fillable = [
        'treecount', //integer
        'import_date', //timestamp
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
    protected $resourceKey = 'treecounts';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyR()
    {
        return $this->hasMany(TreeCountO::class, 'survey');
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
    public function cohortR()
    {
        return $this->belongsTo(CohortO::class, 'cohort');
    }


}
