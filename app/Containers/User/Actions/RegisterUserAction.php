<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Events\UserRegisteredEvent;
use App\Containers\User\Mails\UserRegisteredMail;
use App\Containers\User\Models\User;
use App\Containers\User\Notifications\UserRegisteredNotification;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

/**
 * Class RegisterUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class RegisterUserAction extends Action
{

    /**
     * @param \App\Ship\Transporters\DataTransporter $data
     *
     * @return  \App\Containers\User\Models\User
     * @throws \Exception
     */
    public function run(DataTransporter $data): User
    {
        //generate password
        $password = (new User())->createPassword();

        // create user record in the database and return it.
        $user = Apiato::call('User@CreateUserByCredentialsTask', [
            $data->email,
            $password,
            $isClient = true,
            $data->username,
            $data->name,
            $data->gender,
            $data->birth
        ]);

        //admin role?
        if ($data->admin) {
            Apiato::call('Authorization@AssignUserToRoleTask', [$user, [Apiato::call('Authorization@FindRoleTask', ['admin'])]]);
        }
        else {
            Apiato::call('Authorization@AssignUserToRoleTask', [$user, [Apiato::call('Authorization@FindRoleTask', ['manager'])]]);
        }

        Mail::send(new UserRegisteredMail($user, $password));

        Notification::send($user, new UserRegisteredNotification($user));

        App::make(Dispatcher::class)->dispatch(New UserRegisteredEvent($user));

        return $user;
    }
}
