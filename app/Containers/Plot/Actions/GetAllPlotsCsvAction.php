<?php

namespace App\Containers\Plot\Actions;

use App\Containers\Plot\Models\PlotView;
use App\Containers\Plot\UI\API\Transformers\PlotViewTransformer;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class GetAllPlotsCsvAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllPlotsCsvAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $header = (new PlotViewTransformer())->transform(new PlotView());
        unset($header['object']);

        return new StreamedResponse(function () use ($request, $header){

            //open file handler
            $fileHandle = fopen('php://output', 'w');

            //write BomUtf8
            fwrite($fileHandle, $bom = (chr(0xEF).chr(0xBB).chr(0xBF)));

            //write content header
            fputcsv($fileHandle, array_keys($header), ',');

            Apiato::call('Plot@GetAllPlotsCsvTask', [$fileHandle], ['addQueryCriteria']);

            fclose($fileHandle);

        }, Response::HTTP_OK, $this->csvHeaders());

    }

    protected function csvHeaders()
    {
        return [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="plot-'.Carbon::now().'.csv"',
        ];
    }
}
