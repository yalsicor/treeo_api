<?php

namespace App\Containers\Hotspot\UI\API\Controllers;

use App\Containers\Hotspot\UI\API\Requests\ChangeHotspotPhotoRequest;
use App\Containers\Hotspot\UI\API\Requests\CreateHotspotRequest;
use App\Containers\Hotspot\UI\API\Requests\DeleteHotspotRequest;
use App\Containers\Hotspot\UI\API\Requests\GetAllHotspotsRequest;
use App\Containers\Hotspot\UI\API\Requests\FindHotspotByIdRequest;
use App\Containers\Hotspot\UI\API\Requests\GetHotspotsForWebmapRequest;
use App\Containers\Hotspot\UI\API\Requests\UpdateHotspotRequest;
use App\Containers\Hotspot\UI\API\Transformers\HotspotTransformer;
use App\Containers\Hotspot\UI\API\Transformers\HotspotWebmapTransformer;
use App\Containers\Media\UI\API\Transformers\MediaTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Hotspot\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateHotspotRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createHotspot(CreateHotspotRequest $request)
    {
        $hotspot = Apiato::call('Hotspot@CreateHotspotAction', [$request]);

        return $this->created($this->transform($hotspot, HotspotTransformer::class));
    }

    /**
     * @param FindHotspotByIdRequest $request
     * @return array
     */
    public function findHotspotById(FindHotspotByIdRequest $request)
    {
        $hotspot = Apiato::call('Hotspot@FindHotspotByIdAction', [$request]);

        return $this->transform($hotspot, HotspotTransformer::class);
    }

    /**
     * @param GetAllHotspotsRequest $request
     * @return array
     */
    public function getAllHotspots(GetAllHotspotsRequest $request)
    {
        $hotspots = Apiato::call('Hotspot@GetAllHotspotsAction', [$request]);

        return $this->transform($hotspots, HotspotTransformer::class);
    }

    /**
     * @param UpdateHotspotRequest $request
     * @return array
     */
    public function updateHotspot(UpdateHotspotRequest $request)
    {
        $hotspot = Apiato::call('Hotspot@UpdateHotspotAction', [$request]);

        return $this->transform($hotspot, HotspotTransformer::class);
    }

    /**
     * @param DeleteHotspotRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteHotspot(DeleteHotspotRequest $request)
    {
        Apiato::call('Hotspot@DeleteHotspotAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param ChangeHotspotPhotoRequest $request
     * @return array
     */
    public function changeHotspotPhoto(ChangeHotspotPhotoRequest $request)
    {
        $photo = Apiato::call('Hotspot@ChangeHotspotPhotoAction', [$request]);

        return $this->transform($photo, MediaTransformer::class);
    }

    /**
     * @param GetHotspotsForWebmapRequest $request
     * @return array
     */
    public function getHotspotsForWebmap(GetHotspotsForWebmapRequest $request)
    {
        $hotspots = Apiato::call('Hotspot@GetAllHotspotsAction', [$request]);

        return $this->transform($hotspots, HotspotWebmapTransformer::class);
    }
}
