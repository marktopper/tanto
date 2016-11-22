# Tanto static site generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tanto/tanto.svg?style=flat-square)](https://packagist.org/packages/tanto/tanto)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](license.txt)
[![Total Downloads](https://img.shields.io/packagist/dt/themsaid/katana-core.svg?style=flat-square)](https://packagist.org/packages/tanto/core)

PHP static site generator with markdown support.

Using the power of laravel's Blade templating engine.

> Tanto started as a fork of [Katana](https://github.com/themsaid/katana).

## Requirements

- PHP 7.0+ or newer
- Apache or Nginx server
- [Composer](https://getcomposer.org)

## Installation

To install a fresh Tanto installation you need to [install composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) & run the following command:

```
composer create-project tanto/tanto my-new-site
```

Once the installation is done you may build your website using the command:

```
php tanto build
```

Tanto is shipped with sample content to help you get started immediately, and after this command runs your site will be generated in the `/public` directory.

## Documentation

The complete Tanto documentation can be found here: https://ulties.com/tanto

## Blade templating engine

Blade is a simple yet powerful templating engine built for laravel, you need to [check Blade's documentation](https://laravel.com/docs/5.2/blade) if you're not already familiar with it.

## Using with GitHub Pages

You can use Tanto to publish a website over GitHub Pages using subtrees, the idea is to deploy the public directory as the master branch of your user GitHub pages repository or the gh-pages branch of your project repository.

You can find the full details in [the documentation](https://ulties.com/tanto).

## Contribution

Contributions are welcomed in this repository https://github.com/tanto-php/core where all source files exist.
