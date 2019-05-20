<?php

namespace App\Containers\Media\Actions;

use App\Containers\Hotspot\Models\Hotspot;
use App\Containers\Nursery\Models\Nursery;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

/**
 * Class GetAlbumAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAlbumAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        //hotspot
        if ($request->hotspot_id) {
            $entity = Hotspot::with('album')->findOrFail($request->hotspot_id);
        }

        //nursery
        if ($request->nursery_id) {
            $entity = Nursery::with('album')->findOrFail($request->nursery_id);
        }
        return $entity->album;
    }
}
