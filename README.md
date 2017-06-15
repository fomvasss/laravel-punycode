# Laravel Punycode

This package converts a Unicode encoded domain name to a IDNA ASCII form and vice-versa.

## Install
Require this package with composer:
```
"fomvasss/laravel-punycode": "^1.0",
```
and run:
```shell
composer update
```
or run
```shell
composer require "fomvasss/laravel-punycode"
```
After updating composer, add the ServiceProvider to the providers array in config/app.php
```php
  Fomvasss\Punycode\PunycodeServiceProvider::class,
```
Copy the package config to your local config with the publish command (optional):
```shell
php artisan vendor:publish --provider="Fomvasss\Punycode\PunycodeServiceProvider" --tag="config"
```

## Usage

### Usage facade
You can now using the Facade (when added), using the PSR-3 levels (encode, decode):
Add in your class the facade:
```php
use Fomvasss\Punycode\Facades\Punycode;
```
Example usage:
```php
var_dump(Punycode::encode('веб-вест.сайт'));
// outputs: xn----9sbccmd8fi.xn--80aswg;

var_dump(Punycode::decode('xn----9sbccmd8fi.xn--80aswg'));
// outputs: веб-вест.сайт
```

#Usage helper functions
```php
punycode_encode('веб-вест.сайт');
punycode_decode('xn----9sbccmd8fi.xn--80aswg');
```

## Links:
- https://github.com/true/php-punycode

## License

Faker is released under the MIT Licence. See the bundled LICENSE file for details.
