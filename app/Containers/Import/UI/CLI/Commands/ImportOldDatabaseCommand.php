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
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Class ImportOldDatabaseCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ImportOldDatabaseCommand extends ConsoleCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'treeo:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from the old database.';

    protected $supporterLogoUrl = 'https://webmap.fairventures.openforests.com/static/img/supporter/';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        $this->info('Importing...');

        //import lookuptables
        $this->importLookupTables();

        //load all smallholder
        $this->info('Importing farmer...');

        //take the first project for now, as there is only one
        $project = Project::find(1);

        $smallholders = SmallholderO::with([
            'genderR',
            'mus',
        ])
            ->get();
        $this->output->progressStart(count($smallholders));

        foreach ($smallholders as $smallholder)
        {
            $this->importFarmer($smallholder, $project);

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    /**
     * @param SmallholderO $smallholder
     * @param Project $project
     * @return mixed
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function importFarmer(SmallholderO $smallholder, Project $project)
    {
        $farmer = Apiato::call('Farmer@CreateFarmerTask', [[
            'name'                      => $smallholder->sh_name,
            'import_id'                 => $smallholder->sh_id,
            'story'                     => $smallholder->story,
            'children'                  => $smallholder->children,
            'birthday'                  => $smallholder->birthday,
            'main_occupation'           => $smallholder->main_occupation,
            'side_occupation'           => $smallholder->side_occupation,
            'spouse_name'               => $smallholder->name_spouse,
            'spouse_birthday'           => $smallholder->birthday_spouse,
            'spouse_main_occupation'    => $smallholder->main_occupation_spouse,
            'spouse_side_occupation'    => $smallholder->side_occupation_spouse,
            'family_income_idr'         => $smallholder->family_income_idr,
            'address'                   => $smallholder->adress,
            'gender_id'                 => ($smallholder->genderR)?
                Gender::where('name', $smallholder->genderR->gender)->first()->id
                :null,
            'project_id'                => $project->id,
        ]]);

        //photo
        if ($photoId = $smallholder->flickrphoto) {
            //check if file is there
            if ($this->checkPhoto($photoId)) {
                $farmer->photo()->associate($this->importMediaFromStorage($photoId));
                $farmer->save();
            }
        }

        //plots
        foreach ($smallholder->mus as $mu) $this->importPlot($mu, $farmer);

        return $farmer;
    }

    /**
     * @param MuO $mu
     * @param Farmer $farmer
     * @return mixed
     * @throws \Exception
     */
    protected function importPlot(MuO $mu, Farmer $farmer)
    {
        //reset variables
        $polygon = null;
        $point = null;

        //polygon
        if ($mu->polygonR) {
            $polygon = Apiato::call('Geo@CreatePolygonTask', [$mu->polygonR->polygon_geo]);
            $point = GeoPoint::create(['point' => $polygon->calculateCenterPoint()]);
        }

        //map plot data
        $plot = Apiato::call('Plot@CreatePlotTask', [[
            'farmer_id'             => $farmer->id,
            'import_id'             => $mu->mu_id,
            'polygon_id'            => optional($polygon ?? null)->id,
            'species_id'            => ($species = optional($mu->cohorts->first())->speciesR)?
                Species::where('name', $species->species_name)->first()->id
                :null,
            'soil_type_id'          => ($soilType = optional($mu->surveys->first())->soilTypeR)?
                SoilType::where('name', $soilType->soiltype_name)->first()->id
                :null,
            'legal_status_id'       => ($legal = $mu->legalStatusR)?
                LegalStatus::where('name', $legal->legal_status)->first()->id
                :null,
            'village_id'            => ($village = $mu->villageR)?
                Village::where('name', $village->village_name)->first()->id
                :null,
            'point_id'              => optional($point ?? null)->id,
            'planting_distance_id'  => ($plantingDistance = optional($mu->surveys->first())->PlantingDistanceR)?
                PlantingDistance::where('name', $plantingDistance->plantingdistance_name)->first()->id
                :null,
            'supporter_id'          => ($mu->supporterR)?
                Supporter::where('name', trim($mu->supporterR->name))->first()->id
                :null,
            'nursery_id'            => ($nursery = optional($mu->cohorts->first())->nurseryR)?
                Nursery::where('owner', $nursery->owner)->first()->id
                :null,
            'identifier'            => (new Plot())->makeIdentifier(),
            'planting_date'         => $mu->plantingdate,
            'video_url'             => $mu->videourl,
            'neighbors'             => $mu->neighbours,
            'landscape_features'    => $mu->landscape_features,
            'general_conditions'    => $mu->general_conditions,
            'fire_fighting'         => $mu->fire_fighting,
            'active'                => ($mu->active)?true:false,
            'sample'                => ($mu->sample)?true:false,
            'plants_planted'        => optional($mu->cohorts->first())->plantsplanted,
        ]]);

        //album
        if ($albumId = $mu->flickralbum) {
            if ($this->checkAlbum($albumId)) {
                $plot->album()->attach($this->loadAlbumMedia($albumId));
                $plot->save();
            }
        }

        //surveys
        foreach ($mu->surveys as $oldSurvey) $this->importSurvey($oldSurvey, $plot);

        return $plot;
    }

    /**
     * @param SurveyO $oldSurvey
     * @param Plot $plot
     * @return mixed
     */
    protected function importSurvey(SurveyO $oldSurvey, Plot $plot)
    {

        //map survey data
        $survey = Apiato::call('Survey@CreateSurveyTask', [[
            'date_start'    => $oldSurvey->date,
            'date_end'      => $oldSurvey->date,
            'date_import'   => $oldSurvey->import_date,
            'plot_id'       => $plot->id,
            'notes'         => $oldSurvey->notes,
            'user_created'  => $oldSurvey->user_creat,
            'status_id'     => null,
            'treecount'     => optional($oldSurvey->treecounts->first())->treecount,
            'import_id'     => $oldSurvey->survey_id,
        ]]);

        //trees
        foreach($oldSurvey->trees as $oldTree) $this->importTree($oldTree, $survey);

        return $survey;
    }

    /**
     * @param TreeO $oldTree
     * @param Survey $survey
     */
    protected function importTree(TreeO $oldTree, Survey $survey)
    {
        //reset geo point
        $treePoint = null;

        //geo point
        if ($oldTree->geom) {
            $treePoint = GeoPoint::create(['point' => $oldTree->geom]);
        }
        //map tree data
        Apiato::call('Tree@FindOrCreateTreeTask', [[
            'survey_id'     => $survey->id,
            'species_id'    => ($oldTree->speciesR)?
                Species::where('name', ($oldTree->speciesR->species_name))->first()->id
                :null,
            'dbh_cm'        => $oldTree->dbh_cm,
            'height_m'      => $oldTree->height_m,
            'health'        => $oldTree->health,
            'comment'       => $oldTree->comment,
            'timestamp'     => $oldTree->import_date,
            'image_id'      => null,
            'point_id'      => optional($treePoint ?? null)->id,
            'import_id'     => $oldTree->tree_id,
        ]]);
    }

    /**
     *
     */
    protected function importLookupTables()
    {
        //gender
        $this->importGender();

        //species
        $this->importSpecies();

        //district
        $this->importDistricts();

        //village
        $this->importVillages();

        //legal
        $this->importLegals();

        //plantingdistance
        $this->importPlantingDistances();

        //soiltype
        $this->importSoilType();

        //supporter
        $this->importSupporter();

        //hotspots
        $this->importHotSpots();

        //nuerseries
        $this->importNurseries();

    }

    /**
     *
     */
    protected function importGender()
    {
        $this->info('Importing gender table...');
        foreach (GenderO::all() as $entity) {
            Gender::create([
                'name' => $entity->gender,
            ]);
        }
        $this->info('Done.');
    }

    /**
     *
     */
    protected function importSpecies()
    {
        $this->info('Importing species table...');
        foreach (SpeciesO::all() as $entity) {
            Species::create([
                'name' => $entity->species_name,
                'latin_name' => $entity->latin_name,
            ]);
        }
        $this->info('Done.');
    }

    /**
     *
     */
    protected function importDistricts()
    {
        $this->info('Importing districts table...');
        foreach (DistrictO::all() as $entity) {
            District::create([
                'name' => $entity->district_name,
            ]);
        }
        $this->info('Done.');
    }

    /**
     *
     */
    protected function importVillages()
    {
        $this->info('Importing village table...');
        foreach (VillageO::with('districtR')->get() as $entity) {
            Village::create([
                'name'          => $entity->village_name,
                'district_id'   => ($entity->districtRelation)?
                    District::where('name', $entity->districtR->district_name)->firstOrFail()->id
                    :null,
            ]);
        }
        $this->info('Done.');
    }


    /**
     *
     */
    protected function importLegals()
    {
        $this->info('Importing legal table...');
        foreach (LegalO::all() as $entity) {
            LegalStatus::create([
                'name' => $entity->legal_status,
            ]);
        }
        $this->info('Done.');
    }

    /**
     *
     */
    protected function importPlantingDistances()
    {
        $this->info('Importing plantingdistance table...');
        foreach (PlantingdistanceO::all() as $entity) {
            PlantingDistance::create([
                'name' => $entity->plantingdistance_name,
            ]);
        }
        $this->info('Done.');
    }

    /**
     *
     */
    protected function importSoilType()
    {
        $this->info('Importing soilType table...');
        foreach (SoilTypeO::all() as $entity) {
            SoilType::create([
                'name' => $entity->soiltype_name,
            ]);
        }
        $this->info('Done.');
    }

    /**
     *
     */
    protected function importSupporter()
    {
        $this->info('Importing supporter table...');
        foreach (SupporterO::all() as $entity) {
            $this->info('Importing supporter image...');

            //build url from config
            $url = $this->supporterLogoUrl . $entity->logofile;

            $media = $this->importMediaFromUrl($url);

            Supporter::create([
                'name' => trim($entity->name),
                'path' => $entity->path,
                'logo_id' => optional($media)   ->id,
            ]);
        }

        $this->info('Done.');
    }

    /**
     *
     */
    protected function importHotSpots()
    {
        $this->info('Importing hotspot table...');
        foreach (HotspotO::all() as $entity) {
            //point
            if ($entity->point_geo) $point = GeoPoint::create([
                'point' => $entity->point_geo,
            ]);

            $hotspot = Hotspot::create([
                'description'   => $entity->description,
                'point_id'      => optional($point ?? null)->id,
                'photo_id'      => null,
                'name_de'       => $entity->name_en,
                'name_en'       => $entity->name_en,
                'name_ms'       => $entity->name_ms,
                'link_de'       => $entity->link_de,
                'link_en'       => $entity->link_en,
                'link_ms'       => $entity->link_ms,
            ]);

            //album
            if ($albumId = $entity->flickralbum) {
                if ($this->checkAlbum($albumId)) {
                    $hotspot->album()->attach($this->loadAlbumMedia($albumId));
                    $hotspot->save();
                }
            }

            //flickrcoverphoto
            if ($photoId = $entity->flickrphoto) {
                if ($this->checkPhoto($photoId)) {
                    $hotspot->photo()->associate($this->importMediaFromStorage($photoId));
                    $hotspot->save();
                }
            }
        }

        $this->info('Done.');
    }

    /**
     *
     */
    protected function importNurseries()
    {
        $this->info('Importing nurseries table...');
        foreach (NurseryO::all() as $entity) {
            //point
            if ($entity->point_geo) $point = GeoPoint::create([
                'point' => $entity->point_geo,
            ]);

            $nursery = Nursery::create([
                'owner'        => $entity->owner,
                'point_id'     => optional($point ?? null)->id,
                'cover_id'     => null,
            ]);

            //album
            if ($albumId = $entity->flickralbum) {
                if ($this->checkAlbum($albumId)) {
                    $nursery->album()->attach($this->loadAlbumMedia($albumId));
                    $nursery->save();
                }
            }

            //flickrcoverphoto
            if ($photoId = $entity->flickrcoverphoto) {
                if ($this->checkPhoto($photoId)) {
                    $nursery->cover()->associate($this->importMediaFromStorage($photoId));
                    $nursery->save();
                }
            }

        }

        $this->info('Done.');
    }

    /**
     * @param $url
     * @return mixed
     */
    protected function importMediaFromUrl($url)
    {
        $info = pathinfo($url);
        $contents = file_get_contents($url);
        $file = '/tmp/' . $info['basename'];
        file_put_contents($file, $contents);
        $uploaded_file = new UploadedFile($file, $info['basename']);

        //check, if is image file
        if(substr($uploaded_file->getMimeType(), 0, 5) == 'image') {
            return Apiato::call('Media@CreateMediaSubAction', [$uploaded_file]);
        }

        return null;
    }

    /**
     * @param $photoId
     * @param null $albumId
     * @return mixed
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function importMediaFromStorage($photoId, $albumId = null)
    {
        $path = storage_path('app'.$this->buildImagePath($photoId, $albumId));
        $filename = pathinfo($path)['basename'];

        $meta = $this->readMeta($this->buildMetaPath($photoId, $albumId));

        $title = substr(trim($meta['title'] ?? ''), 0, 191);
        $description = trim($meta['description'] ?? '');

        $imageFile = new UploadedFile($path, $filename);

        return Apiato::call('Media@CreateMediaSubAction', [
            $imageFile,
            $title,
            $description,
        ]);
    }

    /**
     * @param $photoId
     * @param null $albumId
     * @return string
     */
    protected function buildImagePath($photoId, $albumId = null)
    {
        $folder = $albumId ?? $photoId;

        if (!$photoId) return "/flickr/{$folder}";

        return "/flickr/{$folder}/{$photoId}.jpg";
    }

    /**
     * @param $photoId
     * @param null $albumId
     * @return string
     */
    protected function buildMetaPath($photoId, $albumId = null)
    {
        $folder = $albumId ?? $photoId;

        return "/flickr/{$folder}/{$photoId}.txt";
    }

    /**
     * @param $photoId
     * @param null $albumId
     * @return bool
     */
    protected function checkPhoto($photoId, $albumId = null)
    {
        return Storage::disk('local')->exists($this->buildImagePath($photoId, $albumId));
    }

    /**
     * @param $albumId
     * @return bool
     */
    protected function checkAlbum($albumId)
    {
        return Storage::disk('local')->exists($this->buildImagePath(null, $albumId));
    }

    /**
     * @param $path
     * @return mixed
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function readMeta($path)
    {
        return json_decode(Storage::disk('local')->get($path), true);
    }

    /**
     * @param $albumId
     * @return array
     */
    protected function getPhotoIdsFromAlbumFolder($albumId)
    {
        $files = Storage::disk('local')->files($this->buildImagePath(null, $albumId));
        return array_unique(array_map(function($v) {
            return pathinfo($v)['filename'];
        }, $files));
    }

    /**
     * @param $albumId
     * @return array
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function loadAlbumMedia($albumId)
    {
        $photos = $this->getPhotoIdsFromAlbumFolder($albumId);

        $album = [];
        $i = 1;
        foreach ($photos as $photoId) {
            $media = $this->importMediaFromStorage($photoId, $albumId);
            $album[$media->id] = ['order' => $i++];
        }
        return $album;
    }

}
