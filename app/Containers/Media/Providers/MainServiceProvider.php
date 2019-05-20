<?php

namespace App\Containers\Media\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Intervention\Image\ImageServiceProvider;
use Intervention\Image\Facades\Image;

class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        /*
         * Image Service Providers...
         */
        ImageServiceProvider::class,
    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [
        'Image' => Image::class,
    ];

    /**
     * Register anything in the container.
     */
    public function register()
    {
        parent::register();

    }
}