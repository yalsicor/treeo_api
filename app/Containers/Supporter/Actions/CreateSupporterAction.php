<?php

namespace App\Containers\Supporter\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class CreateSupporterAction
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CreateSupporterAction extends Action
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

        $supporter = Apiato::call('Supporter@CreateSupporterTask', [$data]);

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
