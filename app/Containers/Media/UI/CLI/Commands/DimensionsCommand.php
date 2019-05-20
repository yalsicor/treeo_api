<?php

namespace App\Containers\Media\UI\CLI\Commands;

use App\Containers\Media\Models\Media;
use App\Ship\Parents\Commands\ConsoleCommand;
use Intervention\Image\Facades\Image;

/**
 * Class DimensionsCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class DimensionsCommand extends ConsoleCommand
{

    protected $signature = 'treeo:media:dimensions';

    protected $description = 'Calculate dimensions of all media files';

    /**
     * DimensionsCommand constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function handle()
    {
        $all = Media::all();
        $bar = $this->output->createProgressBar(count($all));
        foreach ($all as $media) {
            //check dimensions
            if (!$media->width || ! $media->height) {
                $image = Image::make(($media->path[0] == '/')?$media->path:storage_path('app/'.$media->path));
                $media->width = $image->width();
                $media->height = $image->height();
                $media->save(['timestamps' => false]);
            }
            $bar->advance();
        }
        $bar->finish();
    }

}