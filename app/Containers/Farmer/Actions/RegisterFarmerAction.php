<?php

namespace App\Containers\Farmer\Actions;

use App\Containers\User\Mails\UserRegisteredMail;
use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class RegisterFarmerAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class RegisterFarmerAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function run(Request $request)
    {
        //load farmer
        $farmer = Apiato::call('Farmer@FindFarmerByIdentifierTask', [$request->id]);

        //check if farmer is already registered
        if ($farmer->user) throw new \Exception('Farmer already registered.', 409);

        //create user
        $password = (new User())->createPassword();
        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            $request->email,
            $password,
            true,
            $username = (new User)->makeUsername(),
            $farmer->name,
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['farmer']));

        //connect
        $farmer->user()->associate($user)->save();

        //send mail
        Mail::send(new UserRegisteredMail($user, $password));

        //return farmer
        $farmer->load('user');
        return $farmer;
    }
}
