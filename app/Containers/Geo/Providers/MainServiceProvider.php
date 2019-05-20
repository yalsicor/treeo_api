<?php

namespace App\Containers\Geo\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Phaza\LaravelPostgis\DatabaseServiceProvider;
use Yalsicor\LaravelGeoImporter\Facades\LaravelGeoImporterFacade;
use Yalsicor\LaravelGeoImporter\LaravelGeoImporterServiceProvider;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        DatabaseServiceProvider::class,
        LaravelGeoImporterServiceProvider::class,
    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [
        'LaravelGeoImporter' => LaravelGeoImporterFacade::class,
    ];

    /**
     * Register anything in the container.
     */
    public function register()
    {
        parent::register();

        // $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        // ...
    }
}
