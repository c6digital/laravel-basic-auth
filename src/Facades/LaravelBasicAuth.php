<?php

namespace C6Digital\LaravelBasicAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \C6Digital\LaravelBasicAuth\LaravelBasicAuth
 */
class LaravelBasicAuth extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \C6Digital\LaravelBasicAuth\LaravelBasicAuth::class;
    }
}
