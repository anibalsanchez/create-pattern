# Create Pattern

## Description

A lightweight PHP implementation of the Static Create Pattern using a trait.

Inspired by [byjg/SingletonPatternPHP](https://github.com/byjg/SingletonPatternPHP)

## Usage

### Create your class

```php
require "vendor/autoload.php";

class Example
{
    // You need to use the trait here
    use \Extly\Infrastructure\Creator\CreatorTrait;

    // Put your code below
}
```

### Use your class

```php
$example = Example::create();
```

```php
$example = Example::getInstance();
```

## Install

Just type: `composer install "anibalsanchez/create-pattern"`

## References

* https://en.wikipedia.org/wiki/Singleton_pattern