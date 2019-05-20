<?php

namespace App\Containers\Farmer\Models;

use App\Containers\Media\Models\Media;
use App\Containers\Plot\Models\Plot;
use App\Containers\Project\Models\Project;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

/**
 * Class Farmer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Farmer extends Model
{

    //protected $dateFormat = 'U';

    public $relationships = [
        'project',
        'gender',
        'photo',
        'plots',
    ];

    protected $hashLength = 4;

    protected $fillable = [
        'name',
        'identifier',
        'story',
        'children',
        'birthday',
        'photo_id',
        'main_occupation',
        'side_occupation',
        'spouse_name',
        'spouse_birthday',
        'spouse_main_occupation',
        'spouse_side_occupation',
        'family_income_idr',
        'address',
        'user_id',
        'gender_id',
        'import_id',
        'project_id',
        'flickr_photo',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $with = [
        'gender',
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
    protected $resourceKey = 'farmers';

    /**
     * @param User $user
     * @return bool
     */
    public function isOwner(User $user)
    {
        return $this->user_id === $user->id;
    }

    /**
     * use delete event to delete subentities
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($element) {
            //plots
            foreach ($element->plots as $plot) {
                $plot->delete();
            }
            //photo
            optional($element->photo)->deleteMedia();
        });
    }

    // relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plots()
    {
        return $this->hasMany(Plot::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo()
    {
        return $this->belongsTo(Media::class, 'photo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

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
