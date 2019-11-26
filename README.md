# Laravel Punycode

This package converts a Unicode encoded domain name to a IDNA ASCII form and vice-versa.

## Install
Run:
```bash
composer require "fomvasss/laravel-punycode"
```
**For Laravel < 5.5**
Add in ServiceProvider to the providers array in config/app.php
```php
  Fomvasss\Punycode\PunycodeServiceProvider::class,
```

Publish configs (optional):
```bash
php artisan vendor:publish --provider="Fomvasss\Punycode\PunycodeServiceProvider" --tag="config"
```

## Usage

### Usage facade
You can now using the facade, using the PSR-3 levels (encode, decode):
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
