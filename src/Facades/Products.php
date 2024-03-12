<?php

namespace AdminKit\Products\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Products\Products
 */
class Products extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Products\Products::class;
    }
}
