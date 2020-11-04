<?php

namespace App\Containers\Plot\UI\API\Transformers;

use App\Containers\Media\UI\API\Transformers\AlbumTransformer;
use App\Containers\Plot\Models\PlotView;
use App\Containers\Plot\Models\WebmapPlotView;
use App\Ship\Parents\Transformers\Transformer;
use League\Fractal\Resource\Collection;

/**
 * Class PlotWebMapTransformer
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class PlotWebMapTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
      'album',
    ];

    /**
     * @param WebmapPlotView $entity
     *
     * @return array
     */
    public function transform(WebmapPlotView $entity)
    {
        $response = [
            'object'                    => 'Plot',
            'id'                        => $entity->getHashedKey('id'),
            'mu_id'                     => $entity->mu_id,
            'point_geo'                 => $entity->point_geo,
            'smallholder'               => $entity->smallholder,
            'sh_name'                   => $entity->sh_name,
            'photo'                     => $entity->photo,
            'videourl'                  => $entity->videourl,
            'story'                     => $entity->story,
            'date'                      => $entity->date,
            'plantingdate'              => $entity->plantingdate,
            'speciesmix'                => $entity->speciesmix,
            'mittelwertvondbh_cm_r'     => $entity->mittelwertvondbh_cm_r,
            'mittelwertvonheight_m_r'   => $entity->mittelwertvonheight_m_r,
            'st_area_r'                 => $entity->st_area_r,
            'treecount'                 => $entity->treecount,
            'name'                      => $entity->name,
            'path'                      => $entity->path,
            'logofile'                  => $entity->logofile,
            'sample'                    => $entity->sample,
        ];

        return $response;
    }

    /**
     * @param WebmapPlotView $entity
     * @return Collection
     */
  public function includeAlbum(WebmapPlotView $entity)
    {
      return $this->collection($entity->album, new AlbumTransformer());
    }
}
