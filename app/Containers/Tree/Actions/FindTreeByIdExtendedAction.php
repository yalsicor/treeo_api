<?php

namespace App\Containers\Tree\Actions;

use App\Containers\Tree\Data\Repositories\TreeViewRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Exception;

/**
 * Class FindTreeByIdExtendedAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class FindTreeByIdExtendedAction extends Action
{

    /**
     * @var TreeViewRepository
     */
    private $repository;

    /**
     * FindTreeByIdExtendedAction constructor.
     * @param TreeViewRepository $repository
     */
    public function __construct(TreeViewRepository $repository)
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
