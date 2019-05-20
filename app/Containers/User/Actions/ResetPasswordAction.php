<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Mails\ResetPasswordMail;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\InternalErrorException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use \Exception as BaseException;

/**
 * Class ResetPasswordAction
 *
 * * @author  Sebastian Weckend
 */
class ResetPasswordAction extends Action
{

    /**
     * @param \App\Ship\Transporters\DataTransporter $data
     * @throws \Exception
     */
    public function run(DataTransporter $data): void
    {
        $credentials = [
            'email'                 => $data->email,
            'token'                 => $data->token,
            'password'              => $password = (new User())->createPassword(),
            'password_confirmation' => $password,
        ];

        $user = Apiato::call('User@FindUserByEmailTask',[$data->email]);

        try {
            Password::broker()->reset(
                $credentials,
                function ($user, $password) {
                    $user->forceFill([
                        'password'       => Hash::make($password),
                        'remember_token' => Str::random(60),
                    ])->save();
                }
            );
        } catch (Exception $e) {
            throw new InternalErrorException();
        }

        //send email
        Mail::send(new ResetPasswordMail($user, $password));
    }
}
