<?php

namespace AAbosham\FilamentHijriDateTimePicker\Forms\Components;

class HijriDatePicker extends HijriDateTimePicker
{
    public function hasTime(): bool
    {
        return false;
    }
}
