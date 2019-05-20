<?php

namespace App\Containers\Import\Models;

use App\Ship\Parents\Models\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

/**
 * Class TreeO
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class TreeO extends Model
{
    protected $connection = 'import';

    use PostgisTrait;

    public $table = 'tree';
    public $primaryKey = 'tree_id';

    protected $fillable = [
        'species', //
        'dbh_cm', //
        'height_m', //
        'health', //
        'comment', //
        'survey', //
        'cohort', //
        'amigo_id', //
        'amigo_uniqueid_6', //
        'amigo_measuremen', //
        'amigo_mu_list', //
        'amigo_health_pic', //
        'amigo_notes', //
        'amigo_dhb_cm2', //
        'amigo_dhb_cm', //
        'amigo_height_m', //
        'amigo_user_creat', //
        'amigo_geom', //geometry(MultiPoint, 4326)
        'geom', //geometry(Point, 4326)
        'amigo_accuracy_g', //
        'import_date', //timestamp
    ];

    protected $postgisFields = [
        'geom',
    ];

    protected $postgisTypes = [
        'geom' => [
            'geomtype' => 'geometry',
            'srid' => 4326,
        ],
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
    protected $resourceKey = 'trees';

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surveyR()
    {
        return $this->belongsTo(SurveyO::class, 'survey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cohortR()
    {
        return $this->belongsTo(CohortO::class, 'cohort');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function speciesR()
    {
        return $this->belongsTo(SpeciesO::class, 'species');
    }

}
