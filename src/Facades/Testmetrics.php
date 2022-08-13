<?php

namespace Shawnveltman\Testmetrics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shawnveltman\Testmetrics\Testmetrics
 */
class Testmetrics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Shawnveltman\Testmetrics\Testmetrics::class;
    }
}
