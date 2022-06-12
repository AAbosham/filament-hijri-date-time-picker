<?php

namespace AAbosham\FilamentHijriDatetimePicker\Forms\Components;

use Filament\Forms\Components\DateTimePicker;
use Carbon\CarbonInterface;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Support\Carbon;

class HijriDatetimePicker extends \Filament\Forms\Components\DateTimePicker
{
    protected string $view = 'filament-hijri-datetime-picker::components.hijri-datetime-picker';

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(static function (DateTimePicker $component, $state): void {
            if (blank($state)) {
                return;
            }

            date_default_timezone_set('UTC');

            $Arabic = new \ArPHP\I18N\Arabic();

            $hijriDate = explode('-', $state);

            if (count($hijriDate) != 3) {
                return;
            }

            $correction = $Arabic->mktimeCorrection($hijriDate[1], $hijriDate[0]);
            $time = $Arabic->mktime(0, 0, 0, $hijriDate[1], $hijriDate[2], $hijriDate[0], $correction);

            $state = \Carbon\Carbon::parse($time);

            if (!$state instanceof CarbonInterface) {
                try {
                    $state = Carbon::createFromFormat($component->getFormat(), $state);
                } catch (InvalidFormatException $exception) {
                    $state = Carbon::parse($state);
                }
            }

            $state->setTimezone($component->getTimezone());

            $component->state((string) $state);
        });

        $this->dehydrateStateUsing(static function (DateTimePicker $component, $state) {
            if (blank($state)) {
                return null;
            }

            if (!$state instanceof CarbonInterface) {
                $state = Carbon::parse($state);
            }

            $state->shiftTimezone($component->getTimezone());
            $state->setTimezone(config('app.timezone'));

            info('dehydrateStateUsing');


            return $state->format($component->getFormat());
        });

        $this->rule(
            'date',
            static fn (DateTimePicker $component): bool => $component->hasDate(),
        );
    }

    public function getState()
    {
        $state = data_get($this->getLivewire(), $this->getStatePath());

        if (is_array($state)) {
            return $state;
        }

        if (blank($state)) {
            return null;
        }

        $date  = \Carbon\Carbon::parse($state)->getTimestamp();

        $Arabic = new \ArPHP\I18N\Arabic();

        $state  = $Arabic->date($this->getFormat(), $date, 1);

        return $state;
    }
}
