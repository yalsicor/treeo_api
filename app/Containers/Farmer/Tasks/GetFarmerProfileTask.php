<?php

namespace App\Containers\Farmer\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class GetFarmerProfileTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetFarmerProfileTask extends Task
{

    /**
     * @return mixed
     * @throws Exception
     */
    public function run()
    {
        if (! $farmer = Apiato::call('Authentication@GetAuthenticatedUserTask')->farmer) {
            throw new Exception('User is not a farmer.', 422);
        }

        return $farmer;
    }
}
