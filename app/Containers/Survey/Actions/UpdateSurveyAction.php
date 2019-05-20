<?php

namespace App\Containers\Survey\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateSurveyAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSurveyAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'date_start',
            'date_end',
            'date_import',
            'notes',
            'user_created',
            'status_id',
            'treecount',
        ]);

        //plot
        if ($request->plot_id) {
            $plot = Apiato::call('Plot@FindPlotByIdentifierTask', [$request->plot_id]);
            if ($plot) $data['plot_id'] = $plot->id;
        }

        $survey = Apiato::call('Survey@FindSurveyByIdentifierTask', [$request->id]);
        $survey = Apiato::call('Survey@UpdateSurveyTask', [$survey->id, $data]);

        return $survey;
    }
}
