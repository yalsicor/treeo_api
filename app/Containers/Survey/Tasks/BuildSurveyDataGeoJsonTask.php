<?php

namespace App\Containers\Survey\Tasks;

use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Collection;

/**
 * Class BuildSurveyDataGeoJsonTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class BuildSurveyDataGeoJsonTask extends Task
{

    /**
     * @param Survey $survey
     * @return array
     */
    public function run(Survey $survey) :array
    {
        $features = new Collection;

        if ($survey) {
            $features = $survey->trees->map(function($item) {
                return [
                    'type'          => 'Feature',
                    'geometry'      => optional($item->point)->point,
                    'properties'    => [
                        'id'          => $id = $item->identifier,
                    ],
                    'id'            => $id,
                ];
            });
        }

        return array(
            'type' => 'FeatureCollection',
            'features' => $features,
        );
    }
}
