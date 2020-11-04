<?php

namespace App\Containers\Survey\Tasks;

use App\Containers\Survey\Data\Repositories\SurveyViewRepository;
use App\Containers\Survey\UI\API\Transformers\SurveyViewTransformer;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Traits\HasQueryCriteriaTrait;

/**
 * Class GetAllSurveysCsvTask
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSurveysCsvTask extends Task
{
    use HasQueryCriteriaTrait;

    protected $repository;

    /**
     * GetAllSurveysCsvTask constructor.
     * @param SurveyViewRepository $repository
     */
    public function __construct(SurveyViewRepository $repository)
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
        return $this->repository->chunk(env('CSV_CHUNK_SIZE', 2000), function($surveys) use ($fileHandle, $delimiter){
            foreach ($surveys as $survey) {
                $data = (new SurveyViewTransformer())->transform($survey);
                unset($data['object']);
                fputcsv($fileHandle, $data, $delimiter);
            }
        });
    }
}
