<?php

namespace Inquid\LaravelFacturacom\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inquid\LaravelFacturacom\LaravelFacturacom
 */
class LaravelFacturacom extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Inquid\LaravelFacturacom\LaravelFacturacom::class;
    }
}
