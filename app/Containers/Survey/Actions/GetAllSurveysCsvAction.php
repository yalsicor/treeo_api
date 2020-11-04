<?php

namespace App\Containers\Survey\Actions;

use App\Containers\Survey\Models\SurveyView;
use App\Containers\Survey\UI\API\Transformers\SurveyViewTransformer;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class GetAllSurveysCsvAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllSurveysCsvAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $header = (new SurveyViewTransformer())->transform(new SurveyView());
        unset($header['object']);

        return new StreamedResponse(function () use ($request, $header){

            //open file handler
            $fileHandle = fopen('php://output', 'w');

            //write BomUtf8
            fwrite($fileHandle, $bom = (chr(0xEF).chr(0xBB).chr(0xBF)));

            //write content header
            fputcsv($fileHandle, array_keys($header), ',');

            Apiato::call('Survey@GetAllSurveysCsvTask', [$fileHandle], ['addQueryCriteria']);

            fclose($fileHandle);

        }, Response::HTTP_OK, $this->csvHeaders());

    }

    protected function csvHeaders()
    {
        return [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="survey-'.Carbon::now().'.csv"',
        ];
    }
}
