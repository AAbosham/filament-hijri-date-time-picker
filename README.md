# This is my package filament-hijri-datetime-picker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aabosham/filament-hijri-datetime-picker.svg?style=flat-square)](https://packagist.org/packages/aabosham/filament-hijri-datetime-picker)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/aabosham/filament-hijri-datetime-picker/run-tests?label=tests)](https://github.com/aabosham/filament-hijri-datetime-picker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/aabosham/filament-hijri-datetime-picker/Check%20&%20fix%20styling?label=code%20style)](https://github.com/aabosham/filament-hijri-datetime-picker/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/aabosham/filament-hijri-datetime-picker.svg?style=flat-square)](https://packagist.org/packages/aabosham/filament-hijri-datetime-picker)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require aabosham/filament-hijri-datetime-picker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-hijri-datetime-picker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-hijri-datetime-picker-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-hijri-datetime-picker-views"
```

## Usage

```php
$filamentHijriDatetimePicker = new AAbosham\FilamentHijriDatetimePicker();
echo $filamentHijriDatetimePicker->echoPhrase('Hello, AAbosham!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AAbosham](https://github.com/AAbosham)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
