# Simple string converter

This package allows converting between different string formats.

## Usage examples

### Class-name

```php
use SSD\StringConverter\Factory;


echo Factory::classNameToCamel('PhpEol');
// phpEol

echo Factory::classNameToConstant('PhpEol');
// PHP_EOL

echo Factory::classNameToHyphen('PhpEol');
// Php-Eol

echo Factory::classNameToUnderscore('PhpEol');
// Php_Eol

echo Factory::classNameToSpace('PhpEol');
// Php Eol
```

### Camel-case

```php
use SSD\StringConverter\Factory;


echo Factory::camelToClassName('phpEol');
// PhpEol

echo Factory::camelToConstant('phpEol');
// PHP_EOL

echo Factory::camelToHyphen('phpEol');
// php-Eol

echo Factory::camelToUnderscore('phpEol');
// php_Eol

echo Factory::camelToSpace('phpEol');
// php Eol
```

### Constant

```php
use SSD\StringConverter\Factory;


echo Factory::constantToClassName('PHP_EOL');
// PhpEol

echo Factory::constantToCamel('PHP_EOL');
// phpEol

echo Factory::constantToHyphen('PHP_EOL');
// PHP-EOL

echo Factory::constantToUnderscore('PHP_EOL');
// PHP_EOL

echo Factory::constantToSpace('PHP_EOL');
// PHP EOL
```

### Hyphen

```php
use SSD\StringConverter\Factory;


echo Factory::hyphenToClassName('php-eol');
// PhpEol

echo Factory::hyphenToCamel('php-eol');
// phpEol

echo Factory::hyphenToConstant('php-eol');
// PHP_EOL

echo Factory::hyphenToUnderscore('php-eol');
// php_eol

echo Factory::hyphenToSpace('php-eol');
// php eol
```

### Underscore

```php
use SSD\StringConverter\Factory;


echo Factory::underscoreToClassName('php_eol');
// PhpEol

echo Factory::underscoreToCamel('php_eol');
// phpEol

echo Factory::underscoreToConstant('php_eol');
// PHP_EOL

echo Factory::underscoreToHyphen('php_eol');
// php-eol

echo Factory::underscoreToSpace('php_eol');
// php eol
```

### Space

```php
use SSD\StringConverter\Factory;


echo Factory::spaceToClassName('php eol');
// PhpEol

echo Factory::spaceToCamel('php eol');
// phpEol

echo Factory::spaceToConstant('php eol');
// PHP_EOL

echo Factory::spaceToHyphen('php eol');
// php-eol

echo Factory::spaceToUnderscore('php eol');
// php_eol
```

## Optional second callback argument

Factory methods can take an optional, second argument of `callable` type so you can additionally modify the result:

```php
echo Factory::constantToSpace('PHP_EOL');
// PHP EOL

echo Factory::constantToSpace('PHP_EOL', 'strtolower');
// php eol

echo Factory::constantToSpace('PHP_EOL', function($string) {
    return str_replace(' ', '', $string);
});
// phpeol
```