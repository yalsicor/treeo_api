<?php

namespace App\Containers\Farmer\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class FarmerView
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FarmerView extends Model
{
    public $table = 'farmers_view';

    protected $fillable = [
        'name',
        'identifier',
        'story',
        'children',
        'birthday',
        'photo_id',
        'photo',
        'main_occupation',
        'side_occupation',
        'spouse_name',
        'spouse_birthday',
        'spouse_main_occupation',
        'spouse_side_occupation',
        'family_income_idr',
        'address',
        'import_id',
        'user_id',
        'gender_id',
        'project_id',
        'project',
        'created_at',
        'updated_at',
        'gender',
        'email',
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
        'birthday',
        'spouse_birthday',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'farmerviews';

    //relations

    //accessors

    /**
     * @param $value
     * @return string|null
     */
    public function getBirthdayAttribute($value)
    {
        Return $this->getIsoDate($value);
    }

    /**
     * @param $value
     * @return string|null
     */
    public function getSpouseBirthdayAttribute($value)
    {
        Return $this->getIsoDate($value);
    }

}
