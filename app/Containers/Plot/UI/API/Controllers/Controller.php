<?php

namespace App\Containers\Plot\UI\API\Controllers;

use App\Containers\Geo\UI\API\Transformers\PolygonTransformer;
use App\Containers\Plot\UI\API\Requests\ChangePlotPolygonRequest;
use App\Containers\Plot\UI\API\Requests\CreatePlotRequest;
use App\Containers\Plot\UI\API\Requests\DeletePlotPolygonRequest;
use App\Containers\Plot\UI\API\Requests\DeletePlotRequest;
use App\Containers\Plot\UI\API\Requests\FindPlotByIdExtendedRequest;
use App\Containers\Plot\UI\API\Requests\ForcePlotPolygonRequest;
use App\Containers\Plot\UI\API\Requests\GeneratePlotPolygonRequest;
use App\Containers\Plot\UI\API\Requests\GetAllPlotsRequest;
use App\Containers\Plot\UI\API\Requests\FindPlotByIdRequest;
use App\Containers\Plot\UI\API\Requests\GetOwnPlotsRequest;
use App\Containers\Plot\UI\API\Requests\GetPlotMapRequest;
use App\Containers\Plot\UI\API\Requests\GetPlotsForMapRequest;
use App\Containers\Plot\UI\API\Requests\UpdatePlotRequest;
use App\Containers\Plot\UI\API\Transformers\PlotTransformer;
use App\Containers\Plot\UI\API\Transformers\PlotViewTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Plot\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreatePlotRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createPlot(CreatePlotRequest $request)
    {
        $plot = Apiato::call('Plot@CreatePlotAction', [$request]);

        return $this->created($this->transform($plot, PlotTransformer::class));
    }

    /**
     * @param FindPlotByIdRequest $request
     * @return array
     */
    public function findPlotById(FindPlotByIdRequest $request)
    {
        $plot = Apiato::call('Plot@FindPlotByIdAction', [$request]);

        return $this->transform($plot, PlotTransformer::class);
    }

    /**
     * @param GetAllPlotsRequest $request
     * @return array
     */
    public function getAllPlots(GetAllPlotsRequest $request)
    {
        $plots = Apiato::call('Plot@GetAllPlotsAction', [$request]);

        return $this->transform($plots, PlotTransformer::class);
    }

    /**
     * @param GetAllPlotsRequest $request
     * @return array
     */
    public function getPlotsView(GetAllPlotsRequest $request)
    {
        $plots = Apiato::call('Plot@GetPlotsViewAction', [$request]);

        return $this->transform($plots, PlotViewTransformer::class);
    }

    /**
     * @param UpdatePlotRequest $request
     * @return array
     */
    public function updatePlot(UpdatePlotRequest $request)
    {
        $plot = Apiato::call('Plot@UpdatePlotAction', [$request]);

        return $this->transform($plot, PlotTransformer::class);
    }

    /**
     * @param DeletePlotRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deletePlot(DeletePlotRequest $request)
    {
        Apiato::call('Plot@DeletePlotAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param GetPlotsForMapRequest $request
     * @return mixed
     */
    public function getPlotsForMap(GetPlotsForMapRequest $request)
    {
        return Apiato::call('Plot@GetPlotsForMapAction', [$request])[0]->data;
    }

    /**
     * @param FindPlotByIdExtendedRequest $request
     * @return array
     */
    public function findPlotByIdExtended(FindPlotByIdExtendedRequest $request)
    {
        $plot = Apiato::call('Plot@FindPlotByIdExtendedAction', [$request]);

        return $this->transform($plot, PlotViewTransformer::class);
    }

    /**
     * @param GetOwnPlotsRequest $request
     * @return array
     */
    public function getOwnPlots(GetOwnPlotsRequest $request)
    {
        $plots = Apiato::call('Plot@GetOwnPlotsAction', [$request]);

        return $this->transform($plots, PlotTransformer::class);
    }

    /**
     * @param GetPlotMapRequest $request
     * @return mixed
     */
    public function getPlotMap(GetPlotMapRequest $request)
    {
        return Apiato::call('Plot@GetPlotMapAction', [$request]);
    }

    /**
     * @param ChangePlotPolygonRequest $request
     * @return array
     */
    public function changePlotPolygon(ChangePlotPolygonRequest $request)
    {
        $plot = Apiato::call('Plot@ChangePlotPolygonAction', [$request]);

        return $this->transform($plot, PlotTransformer::class);
    }

    /**
     * @param GeneratePlotPolygonRequest $request
     * @return array
     */
    public function generatePlotPolygon(GeneratePlotPolygonRequest $request)
    {
        $plot = Apiato::call('Plot@GeneratePlotPolygonAction', [$request]);

        return $this->transform($plot, PlotTransformer::class);
    }

    /**
     * @param ForcePlotPolygonRequest $request
     * @return array
     */
    public function forcePlotPolygon(ForcePlotPolygonRequest $request)
    {
        $polygon = Apiato::call('Plot@ForcePlotPolygonAction', [$request]);

        return $this->transform($polygon, PolygonTransformer::class);
    }

    /**
     * @param DeletePlotPolygonRequest $request
     * @return array
     */
    public function deletePlotPolygon(DeletePlotPolygonRequest $request)
    {
        $plot = Apiato::call('Plot@DeletePlotPolygonAction', [$request]);

        return $this->transform($plot, PlotTransformer::class);
    }
}
