<?php

namespace C6Digital\LaravelBasicAuth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBasicAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('basic-auth')
            ->hasConfigFile();
    }
}
