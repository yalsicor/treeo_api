<?php

namespace App\Containers\Plot\UI\API\Transformers;

use App\Containers\District\UI\API\Transformers\DistrictTransformer;
use App\Containers\Farmer\UI\API\Transformers\FarmerTransformer;
use App\Containers\FieldCoordinator\UI\API\Transformers\FieldCoordinatorTransformer;
use App\Containers\LegalStatus\UI\API\Transformers\LegalStatusTransformer;
use App\Containers\Media\UI\API\Transformers\AlbumTransformer;
use App\Containers\Nursery\UI\API\Transformers\NurseryTransformer;
use App\Containers\PlantingDistance\UI\API\Transformers\PlantingDistanceTransformer;
use App\Containers\Plot\Models\Plot;
use App\Containers\SoilType\UI\API\Transformers\SoilTypeTransformer;
use App\Containers\Species\UI\API\Transformers\SpeciesTransformer;
use App\Containers\Supporter\UI\API\Transformers\SupporterTransformer;
use App\Containers\Survey\UI\API\Transformers\SurveyTransformer;
use App\Containers\Village\UI\API\Transformers\VillageTransformer;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class PlotTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlotTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
        'album',
        'nursery',
        'farmer',
        'polygon',
        'point',
        'planting_distance',
        'legal_status',
        'soil_type',
        'species',
        'village',
        'supporter',
        'surveys',
        'last_survey',
        'field_coordinator',
    ];

    /**
     * @param Plot $entity
     *
     * @return array
     */
    public function transform(Plot $entity)
    {
        $response = [
            'object'                => 'Plot',
            'id'                    => $entity->identifier,
            'farmer_id'             => optional($entity->farmer)->identifier,
            'polygon_id'            => $entity->getHashedKey('polygon_id'),
            'species_id'            => $entity->getHashedKey('species_id'),
            'soil_type_id'          => $entity->getHashedKey('soil_type_id'),
            'legal_status_id'       => $entity->getHashedKey('legal_status_id'),
            'village_id'            => $entity->getHashedKey('village_id'),
            'point_id'              => $entity->getHashedKey('point_id'),
            'planting_distance_id'  => $entity->getHashedKey('planting_distance_id'),
            'supporter_id'          => $entity->getHashedKey('supporter_id'),
            'nursery'               => $entity->getHashedKey('nursery_id'),
            'project'               => optional(optional($entity->farmer)->project)->name,
            'survey_count'          => $entity->surveys_count,
            'area_m2'               => optional($entity->polygon)->area_m2,
            'planting_date'         => $entity->planting_date,
            'video_url'             => $entity->video_url,
            'neighbors'             => $entity->neighbors,
            'landscape_features'    => $entity->landscape_features,
            'general_conditions'    => $entity->general_conditions,
            'fire_fighting'         => $entity->fire_fighting,
            'active'                => $entity->active,
            'sample'                => $entity->sample,
            'plants_planted'        => $entity->plants_planted,
            'created_at'            => $entity->created_at,
            'updated_at'            => $entity->updated_at,
        ];

        return $response;
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Collection
     */
    public function includeAlbum(Plot $plot)
    {
        return $this->collection($plot->album, new AlbumTransformer());
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeFarmer(Plot $plot)
    {
        return (($plot->farmer)?$this->item($plot->farmer, new FarmerTransformer()):null);
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeNursery(Plot $plot)
    {
        return (($plot->nursery)?$this->item($plot->nursery, new NurseryTransformer()):null);
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includePlantingDistance(Plot $plot)
    {
        return (($plot->planting_distance)?$this->item($plot->planting_distance, new PlantingDistanceTransformer()):null);
    }

    /**
     * @param Plot $plot
     * @return mixed
     */
    public function includePoint(Plot $plot)
    {
        return optional($plot->point)->point;
    }

    /**
     * @param Plot $plot
     * @return mixed
     */
    public function includePolygon(Plot $plot)
    {
        return optional($plot->polygon)->polygon;
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeSoilType(Plot $plot)
    {
        return (($plot->soil_type)?$this->item($plot->soil_type, new SoilTypeTransformer()):null);
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeSpecies(Plot $plot)
    {
        return (($plot->species)?$this->item($plot->species, new SpeciesTransformer()):null);
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeVillage(Plot $plot)
    {
        return ($plot->village)?$this->item($plot->village, new VillageTransformer()):null;
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeLegalStatus(Plot $plot)
    {
        return (($plot->legal_status)?$this->item($plot->legal_status, new LegalStatusTransformer()):null);
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeFieldCoordinator(Plot $plot)
    {
        return (($plot->field_coordinator)?$this->item($plot->field_coordinator, new FieldCoordinatorTransformer()):null);
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeSupporter(Plot $plot)
    {
        return (($plot->supporter)?$this->item($plot->supporter, new SupporterTransformer()):null);
    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Collection|null
     */
    public function includeSurveys(Plot $plot)
    {
        return (($plot->surveys)?$this->collection($plot->surveys, new SurveyTransformer()):null);

    }

    /**
     * @param Plot $plot
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeLastSurvey(Plot $plot)
    {
        return (($plot->last_survey)?$this->item($plot->last_survey, new SurveyTransformer()):null);
    }


}
