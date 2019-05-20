<?php

namespace App\Containers\Plot\Actions;

use App\Containers\Plot\Data\Repositories\PlotViewRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Exception;

/**
 * Class FindPlotByIdExtendedAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindPlotByIdExtendedAction extends Action
{
    protected $repository;

    /**
     * FindPlotByIdExtendedAction constructor.
     * @param PlotViewRepository $repository
     */
    public function __construct(PlotViewRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        try {
            return $this->repository->findWhere(['identifier' => $request->id])->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
