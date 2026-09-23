# NonSoloCap

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smart-dato/non-solo-cap.svg?style=flat-square)](https://packagist.org/packages/smart-dato/non-solo-cap)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/smart-dato/non-solo-cap/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/smart-dato/non-solo-cap/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/smart-dato/non-solo-cap/code-style.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/smart-dato/non-solo-cap/actions?query=workflow%3A%22Code+style%22+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/smart-dato/non-solo-cap.svg?style=flat-square)](https://packagist.org/packages/smart-dato/non-solo-cap)

A small Laravel helper that checks whether an Italian postal code (CAP) exists, using [NonSoloCap](https://www.nonsolocap.it/). All data belongs to NonSoloCap, which offers far more than this package uses and has one of the best databases of Italian postal codes.

## Requirements

- PHP 8.2+
- Laravel 8 – 13

## Installation

```bash
composer require smart-dato/non-solo-cap
```

The service provider and the `NonSoloCap` facade alias are registered automatically.

## Usage

```php
use SmartDato\NonSoloCap\Services\NonSoloCap;

NonSoloCap::validZipcode('39021'); // true
NonSoloCap::validZipcode('99999'); // false

NonSoloCap::generateUrl('39021', 'Laces'); // https://www.nonsolocap.it/?k=39021&c=Laces
```

`validZipcode()` queries nonsolocap.it and returns `false` when the site reports no results. It makes a live HTTP request each time and throws a Guzzle exception if the site cannot be reached, so cache the result if you check the same codes often.

`generateUrl()` only builds a link to the site's search page for a postal code and/or place name; it makes no request.

## Testing

```bash
composer test
```

The validation test calls nonsolocap.it, so it needs network access.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SmartDato](https://github.com/smart-dato)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
