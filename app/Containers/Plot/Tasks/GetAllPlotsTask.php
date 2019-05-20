<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Criterias\PlotsByUserCriteria;
use App\Containers\Plot\Data\Repositories\PlotRepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;
use Illuminate\Support\Facades\Auth;

/**
 * Class GetAllPlotsTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllPlotsTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllPlotsTask constructor.
     * @param PlotRepository $repository
     */
    public function __construct(PlotRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $eager
     * @return mixed
     */
    public function run(Array $eager = [])
    {
        $this->eagerLoading($this->repository, $eager);

        return $this->repository->paginate();
    }

    /**
     * @param User $user
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function own(User $user)
    {
        $this->repository->pushCriteria(new PlotsByUserCriteria($user));
    }
}
