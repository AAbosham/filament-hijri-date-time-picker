<?php

namespace AAbosham\FilamentHijriDatetimePicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AAbosham\FilamentHijriDatetimePicker\FilamentHijriDatetimePicker
 */
class FilamentHijriDatetimePicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-hijri-datetime-picker';
    }
}
