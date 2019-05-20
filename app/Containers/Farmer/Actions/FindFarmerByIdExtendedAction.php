<?php

namespace App\Containers\Farmer\Actions;

use App\Containers\Farmer\Data\Repositories\FarmerViewRepository;
use App\Containers\Farmer\Models\FarmerView;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Exception;

/**
 * Class FindFarmerByIdExtendedAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindFarmerByIdExtendedAction extends Action
{

    /**
     * @var FarmerViewRepository
     */
    private $repository;

    /**
     * FindFarmerByIdExtendedAction constructor.
     * @param FarmerViewRepository $repository
     */
    public function __construct(FarmerViewRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @return FarmerView|null
     */
    public function run(Request $request) :?FarmerView
    {
        try {
            return $this->repository->findWhere(['identifier' => $request->id])->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
