# A few helpers to profile your test suite

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shawnveltman/testmetrics.svg?style=flat-square)](https://packagist.org/packages/shawnveltman/testmetrics)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/shawnveltman/testmetrics/run-tests?label=tests)](https://github.com/shawnveltman/testmetrics/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/shawnveltman/testmetrics/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/shawnveltman/testmetrics/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shawnveltman/testmetrics.svg?style=flat-square)](https://packagist.org/packages/shawnveltman/testmetrics)

An easy way to find slow tests within your application. Since Laravel Parallel Testing allows for JUnit logging, this is
simply a JUnit xml parser that grabs simple stats (setup time, average test time after setup) for each test suite, to
hilight those that are the slowest.

## Installation

You can install the package via composer:

```bash
composer require shawnveltman/testmetrics
```

After installation, be sure to add the following lines to your phpunit.xml file:

```xml

<logging>
    <junit outputFile="junit.xml"/>
</logging>
```

Finally, be sure to add the junit.xml to your gitignore.

## Usage

Now, after you run your parallel tests, you will have the junit.xml file. Grab the contents of that file as a string,
and pass it to the test_results_parser method, then print your results. That's it!

```php
$testmetrics = new Shawnveltman\Testmetrics();
echo $testmetrics->test_results_parser(contents: $file_contents)->print_results();
```

Alternately, you can pass a filepath instead of string contents.

```php
$testmetrics = new \Shawnveltman\Testmetrics();
$path = base_path('junit.xml');
echo $testmetrics->test_results_parser(path: $path)->print_results();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Shawn Veltman](https://github.com/shawnveltman)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
