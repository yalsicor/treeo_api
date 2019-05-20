<?php

namespace App\Containers\Plot\UI\CLI\Commands;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Commands\ConsoleCommand;
use App\Ship\Transporters\DataTransporter;
use Exception;

/**
 * Class CreateAdminCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class createPolygonCommand extends ConsoleCommand
{

    protected $signature = 'treeo:create:polygon';

    protected $description = 'Create polygons for plots with new surveys';

    /**
     * @void
     */
    public function handle()
    {
        //search for plots without polygon
        $plots = Plot::whereHas('surveys', function($query){
            $query->whereNull('treecount');
        })->where('calculated_polygon', false)->get();

        $this->info("{$plots->count()} plots with surveys and without polygon found.");

        $plotCount = 0;

        foreach ($plots as $plot) {
            $this->info("plot {$plot->identifier}:");

            $survey = $plot->surveys()->whereNull('treecount')->latest()->get()->first();

            if ($survey && $survey->trees()->whereHas('point')->count() >= 20) {
                $this->info("Trying to calculate from survey {$survey->identifier}...");

                try {
                    $geometry = Apiato::call('Plot@GeneratePolygonFromSurveyTask', [$survey]);

                    if ($geometry) {
                        //create polygon
                        $polygon = Apiato::call('Geo@CreatePolygonTask', [$geometry]);

                        //calculate centroid
                        $point = Apiato::call('Geo@CreateGeoPointTask', [$polygon->calculateCenterPoint()]);

                        $plot->calculated_polygon = true;
                        $plot->polygon()->associate($polygon);
                        $plot->point()->associate($point);
                        $plot->save();
                        $plotCount++;
                        $this->info("Successful. Polygon {$polygon->id} created.");
                    } else $this->info('Failed');
                }
                catch (Exception $exception) {
                    $this->info("Error occured: {$exception->getMessage()}");
                }

            } else $this->info('no new survey with min 20 trees found.');
        }

        $this->info("{$plotCount} plots updated with polygons.");
    }
}
