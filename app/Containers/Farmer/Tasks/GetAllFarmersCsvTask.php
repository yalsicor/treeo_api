<?php

namespace App\Containers\Farmer\Tasks;

use App\Containers\Farmer\Data\Repositories\FarmerViewRepository;
use App\Containers\Farmer\UI\API\Transformers\FarmerViewTransformer;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllFarmersCsvTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllFarmersCsvTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllFarmersCsvTask constructor.
     * @param FarmerViewRepository $repository
     */
    public function __construct(FarmerViewRepository $repository)
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
        return $this->repository->chunk(env('CSV_CHUNK_SIZE', 2000), function($farmers) use ($fileHandle, $delimiter){
            foreach ($farmers as $farmer) {
                $data = (new FarmerViewTransformer)->transform($farmer);
                unset($data['object']);
                fputcsv($fileHandle, $data, $delimiter);
            }
        });
    }
}
