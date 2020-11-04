<?php

namespace App\Containers\Farmer\Actions;

use App\Containers\Farmer\Models\Farmer;
use App\Containers\Farmer\Models\FarmerView;
use App\Containers\Farmer\UI\API\Transformers\FarmerViewTransformer;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class GetAllFarmersCsvAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class GetAllFarmersCsvAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $header = (new FarmerViewTransformer())->transform(new FarmerView());
        unset($header['object']);

        return new StreamedResponse(function () use ($request, $header){

            //open file handler
            $fileHandle = fopen('php://output', 'w');

            //write BomUtf8
            fwrite($fileHandle, $bom = (chr(0xEF).chr(0xBB).chr(0xBF)));

            //write content header
            fputcsv($fileHandle, array_keys($header), ',');

            Apiato::call('Farmer@GetAllFarmersCsvTask', [$fileHandle], ['addQueryCriteria']);

            fclose($fileHandle);

        }, Response::HTTP_OK, $this->csvHeaders());

    }

    protected function csvHeaders()
    {
        return [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="farmer-'.Carbon::now().'.csv"',
        ];
    }
}
