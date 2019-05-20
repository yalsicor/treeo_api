<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class SmallholderO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class SmallholderO extends Model
{
    protected $connection = 'import';

    public $table = 'smallholder';
    public $primaryKey = 'sh_id';

    protected $fillable = [
        'sh_name', //
        'flickrphoto', //
        'story', //text
        'children', //integer
        'birthdate', //date
        'main_occupation', //
        'side_occupation', //
        'name_spouse', //
        'birthdate_spouse', //date
        'main_occupation_spouse', //
        'side_occupation_spouse', //
        'family_income_idr', //integer
        'programm_id', //
        'adress', //
        'gender', //id
        'import_id', //
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
    protected $resourceKey = 'smallholders';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genderR()
    {
        return $this->belongsTo(GenderO::class, 'gender');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mus()
    {
        return $this->hasMany(MuO::class, 'smallholder');
    }
}
