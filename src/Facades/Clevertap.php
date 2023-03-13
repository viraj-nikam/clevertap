<?php

namespace VirajNikam\Clevertap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VirajNikam\Clevertap\Clevertap
 */
class Clevertap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \VirajNikam\Clevertap\Clevertap::class;
    }
}
