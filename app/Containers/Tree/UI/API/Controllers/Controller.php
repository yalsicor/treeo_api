<?php

namespace App\Containers\Tree\UI\API\Controllers;

use App\Containers\Media\UI\API\Transformers\MediaTransformer;
use App\Containers\Tree\UI\API\Requests\CreateMultipleTreesRequest;
use App\Containers\Tree\UI\API\Requests\CreateTreeRequest;
use App\Containers\Tree\UI\API\Requests\DeleteTreeRequest;
use App\Containers\Tree\UI\API\Requests\FindTreeByIdExtendedRequest;
use App\Containers\Tree\UI\API\Requests\GetAllTreesRequest;
use App\Containers\Tree\UI\API\Requests\FindTreeByIdRequest;
use App\Containers\Tree\UI\API\Requests\GetOwnTreesRequest;
use App\Containers\Tree\UI\API\Requests\UpdateTreeRequest;
use App\Containers\Tree\UI\API\Requests\UploadTreeImageRequest;
use App\Containers\Tree\UI\API\Transformers\TreeTransformer;
use App\Containers\Tree\UI\API\Transformers\TreeViewTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Tree\UI\API\Controllers
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Controller extends ApiController
{
    /**
     * @param CreateTreeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createTree(CreateTreeRequest $request)
    {
        $tree = Apiato::call('Tree@CreateTreeAction', [$request]);

        return $this->created($this->transform($tree, TreeTransformer::class));
    }

    /**
     * @param FindTreeByIdRequest $request
     * @return array
     */
    public function findTreeById(FindTreeByIdRequest $request)
    {
        $tree = Apiato::call('Tree@FindTreeByIdAction', [$request]);

        return $this->transform($tree, TreeTransformer::class);
    }

    /**
     * @param GetAllTreesRequest $request
     * @return array
     */
    public function getAllTrees(GetAllTreesRequest $request)
    {
        $trees = Apiato::call('Tree@GetAllTreesAction', [$request]);

        return $this->transform($trees, TreeTransformer::class);
    }

    /**
     * @param GetAllTreesRequest $request
     * @return array
     */
    public function getTreeView(GetAllTreesRequest $request)
    {
        $trees = Apiato::call('Tree@GetAllTreesViewAction', [$request]);

        return $this->transform($trees, TreeViewTransformer::class);
    }

    /**
     * @param UpdateTreeRequest $request
     * @return array
     */
    public function updateTree(UpdateTreeRequest $request)
    {
        $tree = Apiato::call('Tree@UpdateTreeAction', [$request]);

        return $this->transform($tree, TreeTransformer::class);
    }

    /**
     * @param DeleteTreeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteTree(DeleteTreeRequest $request)
    {
        Apiato::call('Tree@DeleteTreeAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param FindTreeByIdExtendedRequest $request
     * @return array
     */
    public function findTreeByIdExtended(FindTreeByIdExtendedRequest $request)
    {
        $tree = Apiato::call('Tree@FindTreeByIdExtendedAction', [$request]);

        return $this->transform($tree, TreeViewTransformer::class);
    }

    /**
     * @param GetOwnTreesRequest $request
     * @return array
     */
    public function getOwnTrees(GetOwnTreesRequest $request)
    {
        $trees = Apiato::call('Tree@GetOwnTreesAction', [$request]);

        return $this->transform($trees, TreeTransformer::class);
    }

    /**
     * @param UploadTreeImageRequest $request
     * @return array
     */
    public function uploadTreeImage(UploadTreeImageRequest $request)
    {
        $media = Apiato::call('Tree@UploadTreeImageAction', [$request]);

        return $this->transform($media, MediaTransformer::class);
    }

    /**
     * @param CreateMultipleTreesRequest $request
     * @return array
     */
    public function createMultipleTrees(CreateMultipleTreesRequest $request)
    {
        $trees = Apiato::call('Tree@CreateMultipleTreesAction', [$request]);

        return $this->transform($trees, TreeTransformer::class);
    }

    /**
     * @param GetAllTreesRequest $request
     * @return mixed
     */
    public function getAllTreesCsv(GetAllTreesRequest $request)
    {
        return Apiato::call('Tree@GetAllTreesCsvAction', [$request]);
    }
}
