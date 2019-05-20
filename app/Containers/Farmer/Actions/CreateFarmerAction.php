<?php

namespace App\Containers\Farmer\Actions;

use App\Containers\User\Mails\UserRegisteredMail;
use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\Mail;

/**
 * Class CreateFarmerAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateFarmerAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'email',
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
        ]);

        $userdata = $request->sanitizeInput([
            'name',
            'email',
        ]);

        //create user
        $password = (new User())->createPassword();
        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            $userdata['email'],
            $password,
            $isClient = true,
            (new User)->makeUsername(),
            $userdata['name'],
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['farmer']));

        $data['user_id'] = $user->id;

        $farmer = Apiato::call('Farmer@CreateFarmerTask', [$data]);

        //handle photo
        if ($request->photo) {
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->photo,
                $farmer->name,
            ]);
            $farmer->photo()->associate($media);
            $farmer->save();
        }

        //send email to farmer
        Mail::send(new UserRegisteredMail($user, $password));

        return $farmer;
    }
}
