# Simple string converter

This simple class allows you to easily convert between the following string formats:


- Class-name to:
    - Camel-case (PhpEol => phpEol)
    - Constant (PhpEol => PHP_EOL)
    - Hyphen (PhpEol => Php-Eol)
    - Underscore (PhpEol => Php_Eol)
    - Space (PhpEol => Php Eol)

- Camel-case to:
    - Class-name (phpEol => PhpEol)
    - Constant (phpEol => PHP_EOL)
    - Hyphen (phpEol => php-Eol)
    - Underscore (phpEol => php_Eol)
    - Space (phpEol => php Eol)

- Constant to:
    - Class-name (PHP_EOL => PhpEol)
    - Camel-case (PHP_EOL => phpEol)
    - Hyphen (PHP_EOL => PHP-EOL)
    - Underscore (PHP_EOL => PHP_EOL)
    - Space (PHP_EOL => PHP EOL)

- Hyphen to:
    - Class-name (php-eol => PhpEol)
    - Camel-case (php-eol => phpEol)
    - Constant (php-eol => PHP_EOL)
    - Underscore (php-eol => php_eol)
    - Space (php-eol => php eol)

- Underscore to:
    - Class-name (php_eol => PhpEol)
    - Camel-case (php_eol => phpEol)
    - Constant (php_eol => PHP_EOL)
    - Hyphen (php_eol => php-eol)
    - Space (php_eol => php eol)

- Space to:
    - Class-name (php eol => PhpEol)
    - Camel-case (php eol => phpEol)
    - Constant (php eol => PHP_EOL)
    - Hyphen (php eol => php-eol)
    - Underscore (php eol => php_eol)

## Usage examples

### Class-name

```
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

```
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

```
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

```
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

```
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

```
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

```
echo Factory::constantToSpace('PHP_EOL');
// PHP EOL

echo Factory::constantToSpace('PHP_EOL', 'strtolower');
// php eol

echo Factory::constantToSpace('PHP_EOL', function($string) {
    return str_replace(' ', '', $string);
});
// phpeol
```