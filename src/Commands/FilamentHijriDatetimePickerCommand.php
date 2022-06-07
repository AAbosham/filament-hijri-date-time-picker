<?php

namespace AAbosham\FilamentHijriDatetimePicker\Commands;

use Illuminate\Console\Command;

class FilamentHijriDatetimePickerCommand extends Command
{
    public $signature = 'filament-hijri-datetime-picker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
