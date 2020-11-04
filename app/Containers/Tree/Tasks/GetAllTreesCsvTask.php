<?php

namespace App\Containers\Tree\Tasks;

use App\Containers\Tree\Data\Repositories\TreeViewRepository;
use App\Containers\Tree\UI\API\Transformers\TreeViewTransformer;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllTreesCsvTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllTreesCsvTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllTreesCsvTask constructor.
     * @param TreeViewRepository $repository
     */
    public function __construct(TreeViewRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $fileHandle
     * @param string $delimiter
     * @return mixed
     */
    public function run($fileHandle, $delimiter = ',')
    {
        return $this->repository->chunk(env('CSV_CHUNK_SIZE', 2000), function($trees) use ($fileHandle, $delimiter){
            foreach ($trees as $tree) {
                $data = (new TreeViewTransformer())->transform($tree);
                unset($data['object']);
                fputcsv($fileHandle, $data, $delimiter);
            }
        });
    }
}
