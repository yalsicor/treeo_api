<?php

namespace App\Containers\Media\Actions;

use App\Containers\Hotspot\Models\Hotspot;
use App\Containers\Nursery\Models\Nursery;
use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

/**
 * Class UploadAlbumAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UploadAlbumAction extends Action
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

        //put new elements at the end of order
        $i = $entity->album()->max('order') + 1;

        $album = array();
        foreach ($request->album as $image) {
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $image,
                $entity->title,
                $entity->summary,
                $entity->subtitle,
            ]);

            $album[$media->id] = ['order' => $i++];
        }

        $entity->album()->attach($album);

        //reload the album
        return $entity->album()->get();
    }
}
