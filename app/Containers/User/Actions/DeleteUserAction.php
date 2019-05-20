<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

/**
 * Class DeleteUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class DeleteUserAction extends Action
{

    /**
     * @param DataTransporter $data
     * @throws \Exception
     */
    public function run(DataTransporter $data): void
    {
        $user = $data->id ?
            Apiato::call('User@FindUserByIdTask', [$data->id])
            : Apiato::call('Authentication@GetAuthenticatedUserTask');

        //cant delete own account if admin
        if ($user->isAdmin() && $user == Apiato::call('Authentication@GetAuthenticatedUserTask')) {
            throw new \Exception('Cannot delete own admin account.', 400);
        }

        Apiato::call('User@DeleteUserTask', [$user]);
    }
}
