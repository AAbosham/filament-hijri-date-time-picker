<?php

namespace AAbosham\FilamentHijriDatetimePicker;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentHijriDatetimePickerServiceProvider extends PluginServiceProvider
{
    protected array $beforeCoreScripts = [
        'hijri-date-time-picker' => __DIR__ . '/../resources/dist/js/hijri-date-time-picker.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-hijri-datetime-picker')
            ->hasViews();
    }
}
