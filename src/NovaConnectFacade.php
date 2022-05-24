<?php

namespace Kwidoo\NovaConnect;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kwidoo\NovaConnect\Skeleton\SkeletonClass
 */
class NovaConnectFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nova-connect';
    }
}
