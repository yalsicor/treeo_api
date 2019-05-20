<?php

namespace App\Containers\Nursery\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

/**
 * Class ChangeNurseryCoverAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ChangeNurseryCoverAction extends Action
{
    /**
     * @param Request $request
     * @return |null
     */
    public function run(Request $request)
    {
        //get hotspot
        $nursery = Apiato::call('Nursery@FindNurseryByIdTask', [$request->id]);

        if ($photo = $request->cover) {
            //save photo
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->cover,
            ]);
            $oldMedia = $nursery->cover;

            //set new photo
            $nursery->cover()->associate($media);
            $nursery->save();

            //delete old photo
            if ($oldMedia) Apiato::call('Media@DeleteMediaTask', [$oldMedia->id]);

            return $nursery->cover;
        }
        else {
            //delete photo
            if ($nursery->cover) Apiato::call('Media@DeleteMediaTask', [$nursery->cover->id]);
            return null;
        }
    }
}
