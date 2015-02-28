# Simple string converter

This simple class allows you to easily convert between the following formats of the string:


- Camel Case to Constant (phpEol => PHP_EOL)
- Hyphen to Camel Case (simple-method-name => simpleMethodName)
- Underscore to Camel Case (simple_method_name => simpleMethodName)
- Underscore to Upper Case Words (simple_method_name => SimpleMethodName)

## Usage examples

```
use SSD\StringConverter\Factory;

echo Factory::fromCamelToConstant('phpEol');
// PHP_EOL

echo Factory::hyphenToCamel('simple-method-name');
// simpleMethodName

echo Factory::underScoreToCamel('simple_method_name');
// simpleMethodName

echo Factory::underScoreToUCWords('simple_method_name');
// SimpleMethodName
```