# Monolyth Plumber
Utilities for the Monolyth unframework

## Installation

### Composer (recommended)
```sh
$ composer require monolyth/plumber
```

### Manual
1. Download or clone the repository;
2. Add `/path/to/plumber/src` for namespace `Monolyth\Plumber` to your PSR-4
   autoloader.

## Usage
Currently only 2 utilities are included: `Utf8` and `Proxy`. Statically call
the `handle` method on the classes to utilise them.

## `Utf8`
The `Utf8::handle` method normalises PHP's UTF-8 handling.

## `Proxy`
The `Proxy::handle` method attempts to normalise the `X_HTTP_FORWARDED_FOR`
header so you can just use `REMOTE_ADDR` everywhere. Note that not all proxies
handle this the same, so you might need to roll your own.

