<?php

namespace Inquid\LaravelFacturacom;

use Inquid\LaravelFacturacom\Commands\LaravelFacturacomCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelFacturacomServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-facturacom')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-facturacom_table')
            ->hasCommand(LaravelFacturacomCommand::class);
    }
}
