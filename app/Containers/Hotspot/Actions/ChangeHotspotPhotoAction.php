<?php

namespace App\Containers\Hotspot\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

/**
 * Class ChangeHotspotPhotoAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ChangeHotspotPhotoAction extends Action
{
    /**
     * @param Request $request
     * @return |null
     */
    public function run(Request $request)
    {
        //get hotspot
        $hotspot = Apiato::call('Hotspot@FindHotspotByIdTask', [$request->id]);

        if ($photo = $request->photo) {
            //save photo
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->photo,
                $hotspot->name_de,
            ]);
            $oldMedia = $hotspot->photo;

            //set new photo
            $hotspot->photo()->associate($media);
            $hotspot->save();

            //delete old photo
            if ($oldMedia) Apiato::call('Media@DeleteMediaTask', [$oldMedia->id]);

            return $hotspot->photo;
        }
        else {
            //delete photo
            if ($hotspot->photo) Apiato::call('Media@DeleteMediaTask', [$hotspot->photo->id]);
            return null;
        }
    }
}
