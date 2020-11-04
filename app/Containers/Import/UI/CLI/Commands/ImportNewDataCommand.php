<?php

namespace App\Containers\Import\UI\CLI\Commands;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\District\Models\District;
use App\Containers\Farmer\Models\Farmer;
use App\Containers\Farmer\Models\Gender;
use App\Containers\Geo\Models\GeoPoint;
use App\Containers\Hotspot\Models\Hotspot;
use App\Containers\Import\Models\DistrictO;
use App\Containers\Import\Models\GenderO;
use App\Containers\Import\Models\HotspotO;
use App\Containers\Import\Models\Import20190731;
use App\Containers\Import\Models\LegalO;
use App\Containers\Import\Models\MuO;
use App\Containers\Import\Models\NurseryO;
use App\Containers\Import\Models\PlantingdistanceO;
use App\Containers\Import\Models\SmallholderO;
use App\Containers\Import\Models\SoilTypeO;
use App\Containers\Import\Models\SpeciesO;
use App\Containers\Import\Models\SupporterO;
use App\Containers\Import\Models\SurveyO;
use App\Containers\Import\Models\TreeO;
use App\Containers\Import\Models\VillageO;
use App\Containers\LegalStatus\Models\LegalStatus;
use App\Containers\Nursery\Models\Nursery;
use App\Containers\PlantingDistance\Models\PlantingDistance;
use App\Containers\Plot\Models\Plot;
use App\Containers\Project\Models\Project;
use App\Containers\SoilType\Models\SoilType;
use App\Containers\Species\Models\Species;
use App\Containers\Supporter\Models\Supporter;
use App\Containers\Survey\Models\Survey;
use App\Containers\Village\Models\Village;
use App\Ship\Parents\Commands\ConsoleCommand;
use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * Class ImportNewDataCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ImportNewDataCommand extends ConsoleCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'treeo:import:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import new data.';

    protected $importId = '20190731';

    /**
     * Create a new command instance.
     *
     * @param ConsoleOutput $console
     */
    public function __construct(ConsoleOutput $console)
    {
        parent::__construct();

        $this->console = $console;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Importing...');

        DB::beginTransaction();
        try {

            $this->info('Importing farmer...');

            //take the first project for now, as there is only one
            $project = Project::find(1);

            $farmers = Import20190731::all();

            $this->output->progressStart(count($farmers));

            foreach ($farmers as $entity)
            {
                //create farmer
                $farmer = Apiato::call('Farmer@CreateFarmerTask', [[
                    'name'          => $entity->name,
                    'import_id'     => $this->importId,
                    'project_id'    => $project->id,
                ]]);

                // village
                if (!$village = Village::where('name', $entity->village)->whereHas('district', function($q) use ($entity){
                    $q->where('name', $entity->district);
                })->first()) {
                    $district = District::firstOrCreate([
                        'name' => $entity->district,
                    ]);
                    $village = Apiato::call('Village@CreateVillageTask', [[
                        'name' => $entity->village,
                        'district_id'   => $district->id,
                    ]]);
                }

                //add polygon
                $polygon = Apiato::call('Geo@CreatePolygonTask', [$entity->geom]);

                //create plot
                $plot = Apiato::call('Plot@CreatePlotTask', [[
                    'farmer_id'     => $farmer->id,
                    'village_id'    => optional($village)->id,
                    'polygon_id'    => optional($polygon)->id,
                    'planting_date' => $entity->plantingda,
                    'import_id'     => $this->importId,
                ]]);

                $this->output->progressAdvance();
            }

            $this->output->progressFinish();

            DB::commit();

        } catch (Exception $e) {
            $this->console->writeln('Error! Something went wrong!');
            $this->console->writeln('Error: ' . $e);
            DB::rollBack();
            exit;
        }
        $this->info('Importing finished');
    }

}
