<?php

namespace AAbosham\FilamentHijriDatetimePicker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AAbosham\FilamentHijriDatetimePicker\Commands\FilamentHijriDatetimePickerCommand;

class FilamentHijriDatetimePickerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-hijri-datetime-picker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-hijri-datetime-picker_table')
            ->hasCommand(FilamentHijriDatetimePickerCommand::class);
    }
}
