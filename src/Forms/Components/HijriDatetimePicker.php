<?php

namespace AAbosham\FilamentHijriDateTimePicker\Forms\Components;

use Filament\Forms\Components\DateTimePicker;
use Carbon\CarbonInterface;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Support\Carbon;

class HijriDateTimePicker extends \Filament\Forms\Components\DateTimePicker
{
    protected string $view = 'filament-hijri-date-time-picker::components.hijri-date-time-picker';

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(static function (DateTimePicker $component, $state): void {
            if (blank($state)) {
                return;
            }

            $state = $component->getConvertToGregorianDate($state);

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

            return $state->format($component->getFormat());
        });

        $this->rule(
            'date',
            static fn (DateTimePicker $component): bool => $component->hasDate(),
        );
    }

    private function dateIsHijri(string $date): bool
    {

        $hijriDate = explode('-', $date);

        $hijri_year = (int) $hijriDate[0];

        if ($hijri_year >= 1300 && $hijri_year <= 1460) {
            return true;
        } else if ($hijri_year >= 1900 && $hijri_year <= 2100) {
            return false;
        }
    }

    public function getState()
    {
        $state = data_get($this->getLivewire(), $this->getStatePath());

        if (is_array($state)) {
            return null;
        }

        if (blank($state)) {
            return null;
        }

        if ($this->dateIsHijri($state)) {
            return $state;
        }

        $date  = \Carbon\Carbon::parse($state)->getTimestamp();

        $Arabic = new \ArPHP\I18N\Arabic();

        $state  = $Arabic->date($this->getFormat(), $date, 1);

        return $state;
    }

    public function getGregorianDate(): Carbon | null | string
    {
        $state = data_get($this->getLivewire(), $this->getStatePath());

        if (blank($state)) {
            return null;
        }

        if ($this->dateIsHijri($state)) {
            $state = $this->getConvertToGregorianDate($state);
        }

        return $state;
    }


    public function getConvertToGregorianDate(string $state): Carbon | null | string
    {
        date_default_timezone_set('UTC');

        $Arabic = new \ArPHP\I18N\Arabic();

        $hijriDateTime = explode(' ', $state);

        if (count($hijriDateTime) == 2) {
            $hijriDate = explode('-', $hijriDateTime[0]);
            $hijriTime = explode(':', $hijriDateTime[1]);
            $y = $hijriDate[0];
            $m = $hijriDate[1];
            $d = $hijriDate[2];

            $h = $hijriTime[0];
            $i = $hijriTime[1];
            $s = $hijriTime[2];
        } else if (count($hijriDateTime) == 1) {
            $hijriDate = explode('-', $hijriDateTime[0]);
            $y = $hijriDate[0];
            $m = $hijriDate[1];
            $d = $hijriDate[2];

            $h = 0;
            $i = 0;
            $s = 0;
        } else {
            return null;
        }

        $correction = $Arabic->mktimeCorrection($m, $y);

        $time = $Arabic->mktime($h, $i, $s, $m, $d, $y, $correction);

        $state = \Carbon\Carbon::parse($time);

        if (!$state instanceof CarbonInterface) {
            try {
                $state = Carbon::createFromFormat($this->getFormat(), $state);
            } catch (InvalidFormatException $exception) {
                $state = Carbon::parse($state);
            }
        }

        $state->setTimezone($this->getTimezone());

        return $state;
    }
}
