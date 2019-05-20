<?php

namespace App\Containers\Farmer\Actions;

use App\Containers\Media\Models\Media;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Exception;

/**
 * Class ChangeFarmerProfilePhotoAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ChangeFarmerProfilePhotoAction extends Action
{
    /**
     * @param Request $request
     * @return Media|null
     * @throws Exception
     */
    public function run(Request $request) :?Media
    {
        //get farmer
        if ($request->farmer_id) {
            $farmer = Apiato::call('Farmer@FindFarmerByIdentifierTask', [$request->farmer_id]);
        }
        else {
            $user = Apiato::call('Authentication@GetAuthenticatedUserTask');
            $farmer = $user->farmer;
        }

        if (!$farmer) throw new Exception('User is not a farmer.', 422);

        if ($photo = $request->photo) {
            //save photo
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->photo,
                $farmer->name,
            ]);
            $oldMedia = $farmer->photo;

            //set new photo
            $farmer->photo()->associate($media);
            $farmer->save();

            //delete old photo
            if ($oldMedia) Apiato::call('Media@DeleteMediaTask', [$oldMedia->id]);

            return $farmer->photo;
        }
        else {
            //delete photo
            if ($farmer->photo) Apiato::call('Media@DeleteMediaTask', [$farmer->photo->id]);
            return null;
        }
    }
}
