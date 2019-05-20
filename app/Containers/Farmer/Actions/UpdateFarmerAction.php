<?php

namespace App\Containers\Farmer\Actions;

use App\Containers\Farmer\Models\Farmer;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateFarmerAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateFarmerAction extends Action
{
    /**
     * @param Request $request
     * @return Farmer|null
     */
    public function run(Request $request) :?Farmer
    {
        $data = $request->sanitizeInput([
            'name',
            'story',
            'children',
            'birthday',
            'main_occupation',
            'side_occupation',
            'spouse_name',
            'spouse_birthday',
            'spouse_main_occupation',
            'spouse_side_occupation',
            'family_income_idr',
            'address',
            'gender_id',
            'project_id',
        ]);

        //get farmer
        $farmer = Apiato::call('Farmer@FindFarmerByIdentifierTask', [$request->id]);

        $farmer = Apiato::call('Farmer@UpdateFarmerTask', [$farmer->id, $data]);

        //handle photo
        if ($request->photo) {
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->photo,
                $farmer->name,
            ]);
            //delete old photo
            Apiato::call('Media@DeleteMediaTask', [$farmer->photo_id]);

            //connect new photo
            $farmer->photo()->associate($media);
            $farmer->save();
        }

        return $farmer;
    }
}
