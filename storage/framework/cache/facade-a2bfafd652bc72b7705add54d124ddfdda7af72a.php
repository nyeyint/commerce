<?php

namespace Facades\App\Components\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Components\Facades\CartFacade
 */
class CartFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'App\Components\Facades\CartFacade';
    }
}
