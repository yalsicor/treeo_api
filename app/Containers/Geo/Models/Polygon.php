<?php

namespace App\Containers\Geo\Models;

use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Phaza\LaravelPostgis\Eloquent\Builder;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Yalsicor\LaravelGeoImporter\Geometries\Feature;

class Polygon extends Model
{
    use PostgisTrait;
//    use SoftDeletes;

    protected $table = 'geo_polygons';

    protected $fillable = [
        'polygon',
        'area_m2',

        'created_at',
        'updated_at',
    ];

    protected $postgisFields = [
        'polygon',
    ];

    protected $appends = [
    ];

    protected $postgisTypes = [
        'polygon' => [
            'geomtype' => 'geography',
            'srid' => 4326
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
    protected $resourceKey = 'polygons';

    /**
     * @return float
     */
    public function getCalculatedAreaAttribute()
    {
        return round(
            DB::table($this->table)
                ->where('id', '=', $this->id)
                ->select(DB::raw('ST_area(polygon) as area'))
                ->get()
                ->first()
                ->area,
            2);
    }

    /**
     * @return \Phaza\LaravelPostgis\Geometries\Point|null
     * @throws \Exception
     */
    public function calculateCenterPoint()
    {
        return (new Feature($this->polygon))->calculateCenterPoint();
    }


}
