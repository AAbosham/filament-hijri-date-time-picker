<?php

namespace AAbosham\FilamentHijriDatetimePicker\Forms\Components;

class HijriDatePicker extends HijriDateTimePicker
{
    public function hasTime(): bool
    {
        return false;
    }
}
