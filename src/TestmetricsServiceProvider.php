<?php

namespace Shawnveltman\Testmetrics;

use Shawnveltman\Testmetrics\Commands\TestmetricsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TestmetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('testmetrics')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_testmetrics_table')
            ->hasCommand(TestmetricsCommand::class);
    }
}
