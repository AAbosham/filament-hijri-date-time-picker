<?php

namespace AAbosham\FilamentHijriDatetimePicker\Forms\Components;

class HijriDatePicker extends \Filament\Forms\Components\DatePicker
{
    protected string $view = 'filament-hijri-datetime-picker::components.hijri-datetime-picker';

    public $hijriDateState;

    public function getHijriDateState()
    {
        return $this->getState();
    }
}
