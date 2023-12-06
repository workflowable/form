# Workflowable Forms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/workflowable/form.svg?style=flat-square)](https://packagist.org/packages/workflowable/form)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/workflowable/form/run-tests.yml?branch=master&label=tests&style=flat-square)](https://github.com/workflowable/form/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/workflowable/form/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/workflowable/form/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/workflowable/form.svg?style=flat-square)](https://packagist.org/packages/workflowable/form)

A package for communicating the state and composition of a form to front end.

## Installation

You can install the package via composer:

```bash
composer require workflowable/form
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="form-config"
```

This is the contents of the published config file:

```php
return [
];
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

- [Andrew Leach](https://github.com/7387639+andyleach)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
