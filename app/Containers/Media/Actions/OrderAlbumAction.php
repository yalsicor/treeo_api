<?php

namespace App\Containers\Media\Actions;

use App\Containers\Hotspot\Models\Hotspot;
use App\Containers\Nursery\Models\Nursery;
use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

/**
 * Class OrderAlbumAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class OrderAlbumAction extends Action
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

        //plot
        if ($request->plot_id) {
            $entity = Plot::with('album')->where('identifier', $request->plot_id)->first();
        }

        $i = 0;
        $album = array();
        if ($request->album) {
            if ($request->album[0]) {
                foreach ($request->album as $item) $album[$item] = ['order' => $i++];
            }
        }

        $entity->album()->sync($album);

        return $entity->album()->get();
    }
}
