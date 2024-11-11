<?php

namespace Alireeza\LaravelRsas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alireeza\LaravelRsas\LaravelRsas
 */
class LaravelRsas extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Alireeza\LaravelRsas\LaravelRsas::class;
    }
}
