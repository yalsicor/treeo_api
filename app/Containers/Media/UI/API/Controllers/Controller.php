<?php

namespace App\Containers\Media\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Media\UI\API\Requests\DeleteAlbumRequest;
use App\Containers\Media\UI\API\Requests\GetAlbumRequest;
use App\Containers\Media\UI\API\Requests\OrderAlbumRequest;
use App\Containers\Media\UI\API\Requests\UpdateAlbumRequest;
use App\Containers\Media\UI\API\Requests\UploadAlbumRequest;
use App\Containers\Media\UI\API\Transformers\AlbumTransformer;
use App\Ship\Parents\Controllers\ApiController;

/**
 * Class Controller
 *
 * @package App\Containers\Media\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param GetAlbumRequest $request
     * @return array
     */
    public function getAlbum(GetAlbumRequest $request)
    {
        $album = Apiato::call('Media@GetAlbumAction', [$request]);

        return $this->transform($album, AlbumTransformer::class);
    }

    /**
     * @param UpdateAlbumRequest $request
     * @return array
     */
    public function updateAlbum(UpdateAlbumRequest $request)
    {
        $media = Apiato::call('Media@UpdateAlbumAction', [$request]);

        return $this->transform($media, AlbumTransformer::class);
    }

    /**
     * @param DeleteAlbumRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAlbum(DeleteAlbumRequest $request)
    {
        $media = Apiato::call('Media@DeleteAlbumAction', [$request]);

        return $this->deleted();
    }

    /**
     * @param UploadAlbumRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadAlbum(UploadAlbumRequest $request)
    {
        $album = Apiato::call('Media@UploadAlbumAction', [$request]);

        return $this->created($this->transform($album, AlbumTransformer::class));
    }

    /**
     * @param OrderAlbumRequest $request
     * @return array
     */
    public function orderAlbum(OrderAlbumRequest $request)
    {
        $album = Apiato::call('Media@OrderAlbumAction', [$request]);

        return $this->transform($album, AlbumTransformer::class);
    }

}
