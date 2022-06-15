<?php

namespace AAbosham\FilamentHijriDateTimePicker;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentHijriDateTimePickerServiceProvider extends PluginServiceProvider
{
    protected array $beforeCoreScripts = [
        'hijri-date-time-picker' => __DIR__ . '/../resources/dist/js/hijri-date-time-picker.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-hijri-date-time-picker')
            ->hasViews();
    }
}
