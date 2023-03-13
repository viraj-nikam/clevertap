<?php

namespace VirajNikam\Clevertap;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VirajNikam\Clevertap\Commands\ClevertapCommand;

class ClevertapServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('clevertap')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_clevertap_table')
            ->hasCommand(ClevertapCommand::class);
    }
}
