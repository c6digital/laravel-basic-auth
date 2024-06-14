<?php

namespace C6Digital\BasicAuth;

use Illuminate\Contracts\Http\Kernel;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BasicAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('basic-auth')
            ->hasConfigFile();
    }

    public function packageBooted()
    {
        $this->app->get(Kernel::class)->pushMiddleware(Middleware\BasicAuth::class);
    }
}
