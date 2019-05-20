<?php

namespace App\Containers\Supporter\UI\API\Controllers;

use App\Containers\Media\UI\API\Transformers\MediaTransformer;
use App\Containers\Supporter\UI\API\Requests\ChangeSupporterLogoRequest;
use App\Containers\Supporter\UI\API\Requests\CreateSupporterRequest;
use App\Containers\Supporter\UI\API\Requests\DeleteSupporterRequest;
use App\Containers\Supporter\UI\API\Requests\GetAllSupportersRequest;
use App\Containers\Supporter\UI\API\Requests\FindSupporterByIdRequest;
use App\Containers\Supporter\UI\API\Requests\UpdateSupporterRequest;
use App\Containers\Supporter\UI\API\Transformers\SupporterTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Supporter\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateSupporterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSupporter(CreateSupporterRequest $request)
    {
        $supporter = Apiato::call('Supporter@CreateSupporterAction', [$request]);

        return $this->created($this->transform($supporter, SupporterTransformer::class));
    }

    /**
     * @param FindSupporterByIdRequest $request
     * @return array
     */
    public function findSupporterById(FindSupporterByIdRequest $request)
    {
        $supporter = Apiato::call('Supporter@FindSupporterByIdAction', [$request]);

        return $this->transform($supporter, SupporterTransformer::class);
    }

    /**
     * @param GetAllSupportersRequest $request
     * @return array
     */
    public function getAllSupporters(GetAllSupportersRequest $request)
    {
        $supporters = Apiato::call('Supporter@GetAllSupportersAction', [$request]);

        return $this->transform($supporters, SupporterTransformer::class);
    }

    /**
     * @param UpdateSupporterRequest $request
     * @return array
     */
    public function updateSupporter(UpdateSupporterRequest $request)
    {
        $supporter = Apiato::call('Supporter@UpdateSupporterAction', [$request]);

        return $this->transform($supporter, SupporterTransformer::class);
    }

    /**
     * @param DeleteSupporterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSupporter(DeleteSupporterRequest $request)
    {
        Apiato::call('Supporter@DeleteSupporterAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param ChangeSupporterLogoRequest $request
     * @return array
     */
    public function changeSupporterLogo(ChangeSupporterLogoRequest $request)
    {
        $photo = Apiato::call('Supporter@ChangeSupporterLogoAction', [$request]);

        return $this->transform($photo, MediaTransformer::class);
    }
}
