<?php

namespace App\Containers\Plot\Tasks;

use App\Containers\Plot\Data\Repositories\PlotViewRepository;
use App\Containers\Plot\UI\API\Transformers\PlotViewTransformer;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllPlotsCsvTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllPlotsCsvTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllPlotsCsvTask constructor.
     * @param PlotViewRepository $repository
     */
    public function __construct(PlotViewRepository $repository)
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
        return $this->repository->chunk(env('CSV_CHUNK_SIZE', 2000), function($plots) use ($fileHandle, $delimiter){
            foreach ($plots as $plot) {
                $data = (new PlotViewTransformer())->transform($plot);
                unset($data['object']);
                fputcsv($fileHandle, $data, $delimiter);
            }
        });
    }
}
