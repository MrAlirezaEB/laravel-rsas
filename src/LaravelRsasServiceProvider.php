<?php

namespace Alireeza\LaravelRsas;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alireeza\LaravelRsas\Commands\LaravelRsasCommand;

class LaravelRsasServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-rsas')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_rsas_table')
            ->hasCommand(LaravelRsasCommand::class);
    }
}
