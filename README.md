# This is my package filament-hijri-date-time-picker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aabosham/filament-hijri-date-time-picker.svg?style=flat-square)](https://packagist.org/packages/aabosham/filament-hijri-date-time-picker)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/aabosham/filament-hijri-date-time-picker/run-tests?label=tests)](https://github.com/aabosham/filament-hijri-date-time-picker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/aabosham/filament-hijri-date-time-picker/Check%20&%20fix%20styling?label=code%20style)](https://github.com/aabosham/filament-hijri-date-time-picker/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/aabosham/filament-hijri-date-time-picker.svg?style=flat-square)](https://packagist.org/packages/aabosham/filament-hijri-date-time-picker)

Hijri Date picker for laravel filament;

## Installation

You can install the package via composer:

```bash
composer require aabosham/filament-hijri-date-time-picker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-hijri-date-time-picker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-hijri-date-time-picker-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-hijri-date-time-picker-views"
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AAbosham](https://github.com/AAbosham)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
