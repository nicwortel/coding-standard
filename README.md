# Coding standard

[![Build status](https://img.shields.io/travis/nicwortel/coding-standard.svg)](https://travis-ci.com/nicwortel/coding-standard)
[![License](https://img.shields.io/github/license/nicwortel/coding-standard.svg)](https://github.com/nicwortel/coding-standard/blob/master/LICENSE.txt)
[![Packagist version](https://img.shields.io/packagist/v/nicwortel/coding-standard.svg)](https://packagist.org/packages/nicwortel/coding-standard)
![PHP version from Packagist](https://img.shields.io/packagist/php-v/nicwortel/coding-standard.svg)

This is my ruleset for [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
It's based on the [PSR-12 Extended Coding Style](https://www.php-fig.org/psr/psr-12/),
enhanced with sniffs from the [Slevomat Coding Standard](https://github.com/slevomat/coding-standard).

## Installation

```bash
composer require --dev squizlabs/php_codesniffer nicwortel/coding-standard
```

## Usage

Create a `phpcs.xml` file:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<ruleset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="vendor/squizlabs/php_codesniffer/phpcs.xsd">
    <arg name="basepath" value="."/>
    <arg name="cache" value=".phpcs-cache"/>
    <arg name="colors"/>
    <arg name="extensions" value="php"/>

    <!-- Show progress and sniff names -->
    <arg value="ps" />

    <file>src/</file>

    <rule ref="NicWortel"/>
</ruleset>
```

Then you can run `vendor/bin/phpcs`.
