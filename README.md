# Add basic authentication to your Laravel project in seconds.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/c6digital/laravel-basic-auth.svg?style=flat-square)](https://packagist.org/packages/c6digital/laravel-basic-auth)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/c6digital/laravel-basic-auth/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/c6digital/laravel-basic-auth/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/c6digital/laravel-basic-auth/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/c6digital/laravel-basic-auth/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/c6digital/laravel-basic-auth.svg?style=flat-square)](https://packagist.org/packages/c6digital/laravel-basic-auth)

This package provides a simple `BasicAuth` middleware that adds basic authentication to all routes in your application.

## Installation

You can install the package via Composer:

```bash
composer require c6digital/laravel-basic-auth
```

## Usage

The `BasicAuth` middleware is automatically registered after installing the package. Use environment variables to toggle and change credentials.

```sh
BASIC_AUTH_ENABLED=true
BASIC_AUTH_USERNAME=admin
BASIC_AUTH_PASSWORD=password
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Chandler](https://github.com/c6digital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
