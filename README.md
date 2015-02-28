# Simple string converter

This simple class allows you to easily convert between the following string formats:


- Camel-case to:
    - Constant (phpEol => PHP_EOL)
    - Hyphen (phpEol => php-eol)
    - Underscore (phpEol => php_eol)

- Constant to:
    - Camel-case (PHP_EOL => phpEol)
    - Hyphen (PHP_EOL => php-eol)
    - Underscore (PHP_EOL => php_eol)

- Hyphen to:
    - Camel-case (php-eol => phpEol)
    - Constant (php-eol => PHP_EOL)
    - Underscore (php-eol => php_eol)

- Underscore to:
    - Camel-case (php_eol => phpEol)
    - Constant (php_eol => PHP_EOL)
    - Hyphen (php_eol => php-eol)


## Usage examples

```
use SSD\StringConverter\Factory;

echo Factory::camelToConstant('phpEol');
// PHP_EOL

echo Factory::camelToHyphen('phpEol');
// php-eol

echo Factory::camelToUnderscore('phpEol');
// php_eol

echo Factory::constantToCamel('PHP_EOL');
// phpEol

echo Factory::constantToHyphen('PHP_EOL');
// php-eol

echo Factory::constantToUnderscore('PHP_EOL');
// php_eol

echo Factory::hyphenToCamel('php-eol');
// phpEol

echo Factory::hyphenToConstant('php-eol');
// PHP_EOL

echo Factory::hyphenToUnderscore('php-eol');
// php_eol

echo Factory::underscoreToCamel('php_eol');
// phpEol

echo Factory::underscoreToConstant('php_eol');
// PHP_EOL

echo Factory::underscoreToHyphen('php_eol');
// php-eol
```