# Simple string converter

This simple class allows you to easily convert between the following string formats:


- Camel-case to:
    - Constant (phpEol => PHP_EOL)
    - Hyphen (phpEol => php-eol)
    - Underscore (phpEol => php_eol)
    - Space (phpEol => php Eol | php eol...)

- Constant to:
    - Camel-case (PHP_EOL => phpEol)
    - Hyphen (PHP_EOL => php-eol)
    - Underscore (PHP_EOL => php_eol)
    - Space (PHP_EOL => PHP EOL | php eol...)

- Hyphen to:
    - Camel-case (php-eol => phpEol)
    - Constant (php-eol => PHP_EOL)
    - Underscore (php-eol => php_eol)
    - Space (php-eol => php eol...)

- Underscore to:
    - Camel-case (php_eol => phpEol)
    - Constant (php_eol => PHP_EOL)
    - Hyphen (php_eol => php-eol)
    - Space (php_eol => php eol...)

- Space to:
    - Camel-case (php eol => phpEol)
    - Constant (php eol => PHP_EOL)
    - Hyphen (php eol => php-eol)
    - Underscore (php eol => php_eol)

## Usage examples

```
use SSD\StringConverter\Factory;


### Camel-case

echo Factory::camelToConstant('phpEol');
// PHP_EOL

echo Factory::camelToHyphen('phpEol');
// php-eol

echo Factory::camelToUnderscore('phpEol');
// php_eol

echo Factory::camelToSpace('phpEol');
// php Eol

echo Factory::camelToSpace('phpEol', 'strtolower');
// php eol


### Constant

echo Factory::constantToCamel('PHP_EOL');
// phpEol

echo Factory::constantToHyphen('PHP_EOL');
// php-eol

echo Factory::constantToUnderscore('PHP_EOL');
// php_eol

echo Factory::constantToSpace('PHP_EOL');
// PHP EOL

echo Factory::constantToSpace('PHP_EOL', 'strtolower');
// php eol


### Hyphen

echo Factory::hyphenToCamel('php-eol');
// phpEol

echo Factory::hyphenToConstant('php-eol');
// PHP_EOL

echo Factory::hyphenToUnderscore('php-eol');
// php_eol

echo Factory::hyphenToSpace('php-eol');
// php eol

echo Factory::hyphenToSpace('php-eol', 'ucfirst');
// Php eol


### Underscore

echo Factory::underscoreToCamel('php_eol');
// phpEol

echo Factory::underscoreToConstant('php_eol');
// PHP_EOL

echo Factory::underscoreToHyphen('php_eol');
// php-eol

echo Factory::underscoreToSpace('php_eol');
// php eol

echo Factory::underscoreToSpace('php_eol', 'ucfirst');
// Php eol


### Space

echo Factory::spaceToCamel('php eol');
// phpEol

echo Factory::spaceToConstant('php eol');
// PHP_EOL

echo Factory::spaceToHyphen('php eol');
// php-eol

echo Factory::spaceToUnderscore('php eol');
// php_eol
```