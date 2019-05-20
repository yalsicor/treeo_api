<?php

namespace App\Containers\Supporter\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

/**
 * Class ChangeSupporterLogoAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ChangeSupporterLogoAction extends Action
{
    public function run(Request $request)
    {
        //get supporter
        $supporter = Apiato::call('Supporter@FindSupporterByIdTask', [$request->id]);

        if ($photo = $request->logo) {
            //save photo
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->logo,
                $supporter->name,
            ]);
            $oldMedia = $supporter->logo;

            //set new photo
            $supporter->logo()->associate($media);
            $supporter->save();

            //delete old photo
            if ($oldMedia) Apiato::call('Media@DeleteMediaTask', [$oldMedia->id]);

            return $supporter->logo;
        }
        else {
            //delete photo
            if ($supporter->logo) Apiato::call('Media@DeleteMediaTask', [$supporter->logo->id]);
            return null;
        }
    }
}
