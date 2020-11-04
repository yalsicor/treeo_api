<?php

namespace App\Containers\Farmer\UI\API\Controllers;

use App\Containers\Farmer\UI\API\Requests\ChangeFarmerProfilePhotoRequest;
use App\Containers\Farmer\UI\API\Requests\CreateFarmerRequest;
use App\Containers\Farmer\UI\API\Requests\DeleteFarmerRequest;
use App\Containers\Farmer\UI\API\Requests\FindFarmerByIdExtendedRequest;
use App\Containers\Farmer\UI\API\Requests\GetAllFarmersRequest;
use App\Containers\Farmer\UI\API\Requests\FindFarmerByIdRequest;
use App\Containers\Farmer\UI\API\Requests\GetAllGendersRequest;
use App\Containers\Farmer\UI\API\Requests\GetFarmerProfileRequest;
use App\Containers\Farmer\UI\API\Requests\RegisterFarmerRequest;
use App\Containers\Farmer\UI\API\Requests\UpdateFarmerRequest;
use App\Containers\Farmer\UI\API\Transformers\FarmerProfileTransformer;
use App\Containers\Farmer\UI\API\Transformers\FarmerTransformer;
use App\Containers\Farmer\UI\API\Transformers\FarmerViewTransformer;
use App\Containers\Farmer\UI\API\Transformers\GenderTransformer;
use App\Containers\Media\UI\API\Transformers\MediaTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class Controller
 *
 * @package App\Containers\Farmer\UI\API\Controllers
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateFarmerRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createFarmer(CreateFarmerRequest $request)
    {
        $farmer = Apiato::call('Farmer@CreateFarmerAction', [$request]);

        return $this->created($this->transform($farmer, FarmerTransformer::class));
    }

    /**
     * @param FindFarmerByIdRequest $request
     * @return array
     */
    public function findFarmerById(FindFarmerByIdRequest $request)
    {
        $farmer = Apiato::call('Farmer@FindFarmerByIdAction', [$request]);

        return $this->transform($farmer, FarmerTransformer::class);
    }

    /**
     * @param GetAllFarmersRequest $request
     * @return array
     */
    public function getAllFarmers(GetAllFarmersRequest $request)
    {
        $farmers = Apiato::call('Farmer@GetAllFarmersAction', [$request]);

        return $this->transform($farmers, FarmerTransformer::class);
    }

    /**
     * @param GetAllFarmersRequest $request
     * @return array
     */
    public function getFarmerView(GetAllFarmersRequest $request)
    {
        $farmers = Apiato::call('Farmer@GetAllFarmersViewAction', [$request]);

        return $this->transform($farmers, FarmerViewTransformer::class);
    }

    /**
     * @param UpdateFarmerRequest $request
     * @return array
     */
    public function updateFarmer(UpdateFarmerRequest $request)
    {
        $farmer = Apiato::call('Farmer@UpdateFarmerAction', [$request]);

        return $this->transform($farmer, FarmerTransformer::class);
    }

    /**
     * @param DeleteFarmerRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteFarmer(DeleteFarmerRequest $request)
    {
        Apiato::call('Farmer@DeleteFarmerAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param GetAllGendersRequest $request
     * @return array
     */
    public function getAllGenders(GetAllGendersRequest $request)
    {
        $genders = Apiato::call('Farmer@GetAllGendersTask', []);

        return $this->transform($genders, GenderTransformer::class);
    }

    /**
     * @param GetFarmerProfileRequest $request
     * @return array
     */
    public function getProfile(GetFarmerProfileRequest $request)
    {
        $farmer = Apiato::call('Farmer@GetFarmerProfileTask');

        return $this->transform($farmer, FarmerProfileTransformer::class);
    }

    /**
     * @param FindFarmerByIdExtendedRequest $request
     * @return array
     */
    public function findFarmerByIdExtended(FindFarmerByIdExtendedRequest $request)
    {
        $farmer = Apiato::call('Farmer@FindFarmerByIdExtendedAction', [$request]);

        return $this->transform($farmer, FarmerViewTransformer::class);
    }

    /**
     * @param ChangeFarmerProfilePhotoRequest $request
     * @return array
     */
    public function changeFarmerProfilePhoto(ChangeFarmerProfilePhotoRequest $request)
    {
        $photo = Apiato::call('Farmer@ChangeFarmerProfilePhotoAction', [$request]);

        return $this->transform($photo, MediaTransformer::class);
    }

    /**
     * @param RegisterFarmerRequest $request
     * @return array
     */
    public function registerFarmer(RegisterFarmerRequest $request)
    {
        $farmer = Apiato::call('Farmer@RegisterFarmerAction', [$request]);

        return $this->transform($farmer, FarmerProfileTransformer::class);
    }

    /**
     * @param GetAllFarmersRequest $request
     * @return mixed
     */
    public function getAllFarmersCsv(GetAllFarmersRequest $request)
    {
        return Apiato::call('Farmer@GetAllFarmersCsvAction', [$request]);
    }
}
