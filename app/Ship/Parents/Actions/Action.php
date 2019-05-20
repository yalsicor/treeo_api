<?php

namespace App\Ship\Parents\Actions;

use Apiato\Core\Abstracts\Actions\Action as AbstractAction;
use App\Ship\Parents\Requests\Request;

/**
 * Class Action.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
abstract class Action extends AbstractAction
{

    /**
     * @param Request $request
     * @return array
     */
    public function getIncludes(Request $request)
    {
        return ($request->request->has('include'))?
            explode(',', $request->request->get('include'))
            :[];
    }
}
