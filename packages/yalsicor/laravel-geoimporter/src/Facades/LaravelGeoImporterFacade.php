<?php

namespace Yalsicor\LaravelGeoImporter\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelGeoImporterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-geoimporter';
    }
}
