<?php

namespace App\Containers\Supporter\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class UpdateSupporterAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UpdateSupporterAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'path',
        ]);

        $supporter = Apiato::call('Supporter@UpdateSupporterTask', [$request->id, $data]);

        //logo image
        if ($request->logo) {
            $media = Apiato::call('Media@CreateMediaSubAction', [
                $request->logo,
                $supporter->name,
            ]);
            $supporter->logo()->associate($media);
            $supporter->save();
        }

        return $supporter;
    }
}
