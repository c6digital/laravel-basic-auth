<?php

namespace C6Digital\LaravelBasicAuth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use C6Digital\LaravelBasicAuth\Commands\LaravelBasicAuthCommand;

class LaravelBasicAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-basic-auth')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-basic-auth_table')
            ->hasCommand(LaravelBasicAuthCommand::class);
    }
}
